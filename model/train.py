import numpy as np
import pylab as pl
import pandas as pd
import matplotlib.pyplot as plt 

import seaborn as sns
from sklearn.utils import shuffle
from sklearn.svm import SVC
from sklearn.metrics import confusion_matrix,classification_report
from sklearn.model_selection import cross_val_score, GridSearchCV
import converter
# Input data files are available in the "../input/" directory.
# For example, running this (by clicking run or pressing Shift+Enter) will list the files in the input directory


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
analiticsGraph.showHeatMap(sns, data, plt)


#display(data[['city','city_development_index','relevent_experience','gender','education_level','major_discipline','experience','company_size','company_type','target']].groupby(['gender','education_level','experience','company_size']).agg(["max",'mean',"min"]).style.background_gradient(cmap="Oranges"))

#analiticsGraph.showBar(data, plt, sns)
#analiticsGraph.showWhoChange(data, plt, sns)