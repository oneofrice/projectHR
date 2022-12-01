!pip install catboost
import numpy as np
import pylab as pl
import pandas as pd
import matplotlib.pyplot as plt 
%matplotlib inline
import seaborn as sns
from sklearn import metrics
from sklearn.utils import shuffle
from sklearn.svm import SVC
from sklearn.metrics import confusion_matrix,classification_report
from sklearn.model_selection import cross_val_score, GridSearchCV
from sklearn.model_selection import train_test_split
from catboost import CatBoostRegressor, Pool
from sklearn.metrics import r2_score, mean_squared_error
from sklearn.model_selection import cross_val_score

train = pd.read_csv('aug_train_after.csv')
train.head()

#Test data
test= pd.read_csv('aug_test_after.csv')
test.head()


features =["enrollee_id","city","city_development_index","gender","relevent_experience","enrolled_university","education_level","major_discipline","experience","company_size","company_type","last_new_job","training_hours"]
target = 'target'

train[features].head(10)
# We define the model
model = CatBoostRegressor(objective='RMSE')

model.load_model('model')


Y = train['target']
X = train.drop(columns=['target'])
X_train, X_test, Y_train, Y_test = train_test_split(X, Y, test_size=0.15, random_state=9)

# We train model
#model.fit(X_train, Y_train)
# Any results you write to the current directory are saved as output.

model_CBR = CatBoostRegressor()

parameters = {'depth'         : [6,8,10],
              'learning_rate' : [0.01, 0.05, 0.1],
               'iterations'    : [30, 50, 200]
                 }

# accuracy
accuracies = cross_val_score(estimator = model, X = X_train, y = Y_train, cv = 5)
print("Accuracy:{:.2f} %".format(accuracies.mean()*100))
print("Standard Deviation:{:.2f} %".format(accuracies.std()*100))

grid = GridSearchCV(estimator=model_CBR, param_grid = parameters, cv = 2, n_jobs=-1)
grid.fit(X_train, Y_train)
best_param = grid.best_estimator_

print(" Results from Grid Search " )
print("\n The best estimator across ALL searched params:\n", grid.best_estimator_)
print("\n The best score across ALL searched params:\n", grid.best_score_)
print("\n The best parameters across ALL searched params:\n", grid.best_params_)

#Make predictions using the features from the test data set
predictions = model.predict(test[features])

print(predictions)

# We predict target values (Split 15% from training data)
Y_predict = model.predict(X_test)
print(Y_predict)

# We predict target values (GridSearchCV)
Y_predict1 = best_param.predict(X_test)
print(Y_predict1)



fpr, tpr, thresholds = metrics.roc_curve(train[target],  model.predict(train[features]))
print(metrics.auc(fpr, tpr))

fpr, tpr, thresholds = metrics.roc_curve(Y_test, Y_predict)
print(metrics.auc(fpr, tpr))

fpr, tpr, thresholds = metrics.roc_curve(Y_test, Y_predict1)
print(metrics.auc(fpr, tpr))

