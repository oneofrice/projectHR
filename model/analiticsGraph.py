


def showBar(train, plt, sns):
    #barplots showing the frequency of each category separated by label
    plt.figure(figsize=[15,17])
    fft=["relevent_experience", "education_level","major_discipline", "experience","company_size","company_type", "training_hours","target"]
    n=1
    for f in fft:
        plt.subplot(4,2,n)
        sns.countplot(x=f, hue='education_level', edgecolor="black", alpha=0.7, data=train)
        sns.despine()
        plt.title("Countplot of {}  by education_level".format(f))
        n=n+1
    plt.tight_layout()
    plt.show()


        
    #plt.figure(figsize=[15,4])
    sns.countplot(x='experience', hue='education_level',edgecolor="black", alpha=0.7, data=train)
    sns.despine()
    plt.title("Countplot of experience by education_level")
    plt.show()
    
def showWhoChange(train, plt, sns):
    mnj = train['target'].value_counts()  
    plt.figure(figsize=(6,4))
    sns.barplot(mnj.index, mnj.values, alpha=0.8)
    plt.ylabel('Number of Data', fontsize=12)
    plt.xlabel('target', fontsize=9)
    plt.xticks(rotation=90)
    plt.show()
    

def showGraphSeaborn(sns, df, plt):
    sns.set_theme(style="ticks")
    sns.pairplot(df, hue="experience")
    plt.show()
    
def showHeatMap(sns, df, plt):
    fig = plt.figure(figsize=(18, 14))
    sns.heatmap(df.corr(), annot=True)
    fig.tight_layout()
    plt.show()
    
    
def optimizingAfterBoxplot(data):
    # Q1 = data['training_hours'].quantile(0.25)
    # Q3 = data['training_hours'].quantile(0.75)
    # data_IQR = data[(data['training_hours'] > Q1) & (data['training_hours'] < Q3)]
    # data = data_IQR.copy()

    # Q1 = data['city'].quantile(0.25)
    # Q3 = data['city'].quantile(0.75)
    # data_IQR = data[(data['city'] > Q1) & (data['city'] < Q3)]
    # data = data_IQR.copy()

    # Q1 = data['city'].quantile(0.25)
    # Q3 = data['city'].quantile(0.75)
    # data_IQR = data[(data['city'] > Q1) & (data['city'] < Q3)]
    # data = data_IQR.copy()
    
    Q1 = data['city_development_index'].quantile(0.25)
    Q3 = data['city_development_index'].quantile(0.75)
    data_IQR = data[(data['city_development_index'] > Q1) & (data['city_development_index'] < Q3)]
    data = data_IQR.copy()
    
    
    
    return data_IQR