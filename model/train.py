import numpy as np
import pylab as pl
import pandas as pd
import matplotlib.pyplot as plt 

import seaborn as sns
from sklearn.utils import shuffle
from sklearn.svm import SVC
from sklearn.metrics import confusion_matrix,classification_report
from sklearn.model_selection import cross_val_score, GridSearchCV
from sklearn import preprocessing
import converter
import analiticsGraph

import os
print(os.listdir("input/"))
path = 'input/aug_train.csv'
train= pd.read_csv(path)

#удаляем строки со значеним NaN
data = train.dropna()
print(data)

#print(data.describe(include='all'))
data['gender'] = data['gender'].apply(converter.gender_to_numeric)
data['relevent_experience'] = data['relevent_experience'].apply(converter.rel_experience)
data['enrolled_university'] = data['enrolled_university'].apply(converter.enrollment)
data['education_level'] = data['education_level'].apply(converter.edu_level)
data['major_discipline'] = data['major_discipline'].apply(converter.major)
data['experience'] = data['experience'].apply(converter.experience)
data['company_type'] = data['company_type'].apply(converter.company_t)
data['company_size'] = data['company_size'].apply(converter.company_s)
data['last_new_job'] = data['last_new_job'].apply(converter.last_job)
data['city'] = data['city'].apply(converter.city)

#pairplot
#analiticsGraph.showGraphSeaborn(sns, data, plt)

#корреляция, тепловая карта
#analiticsGraph.showHeatMap(sns, data, plt)


#display(data[['city','city_development_index','relevent_experience','gender','education_level','major_discipline','experience','company_size','company_type','target']].groupby(['gender','education_level','experience','company_size']).agg(["max",'mean',"min"]).style.background_gradient(cmap="Oranges"))

#analiticsGraph.showBar(data, plt, sns)
#analiticsGraph.showWhoChange(data, plt, sns)

#оптимизируем данные после boxplot
#data_IQR = analiticsGraph.optimizingAfterBoxplot(data)
data_IQR = data.copy()


#_, bp = data_IQR.last_new_job.plot.box(return_type='both')
#_, bp = data_IQR.experience.plot.box(return_type='both')
#_, bp = data_IQR.city_development_index.plot.box(return_type='both')
#plt.show()

print(data_IQR)
#data_IQR.pop('enrollee_id')


#_, bp = data.target.plot.box(return_type='both')
#plt.show()

data_IQR.pop('enrollee_id')
data_IQR.pop('city')
data_IQR.pop('enrolled_university')
scaler = preprocessing.MinMaxScaler()
names = data_IQR.columns

data = scaler.fit_transform(data_IQR)
scaled_data = pd.DataFrame(data, columns=names)
print(scaled_data)

scaled_data.to_csv('scaled_train.csv')
#sns.boxplot(data.city)

