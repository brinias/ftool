#!/usr/bin/python
import os, sys
sys.path.append("'/home/brinias2/.local/lib/python2.7/site-packages'")
import pandas as pd
import numpy as np
from sklearn.model_selection import train_test_split
from sklearn.feature_extraction.text import TfidfVectorizer
from skmultilearn.adapt import MLkNN
from sklearn.metrics import hamming_loss, accuracy_score
phpvar = sys.argv[1]
#phpvar="no valid ssl"
#print(phpvar)
aspects_df = pd.read_csv('ml-data-1.csv')
X = aspects_df["text"]
y = np.asarray(aspects_df[aspects_df.columns[1:]])
vetorizar = TfidfVectorizer(max_features=3000, max_df=0.85)
vetorizar.fit(X)
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.33, random_state=42)
X_train_tfidf = vetorizar.transform(X_train)
X_test_tfidf = vetorizar.transform(X_test)
X_train_tfidf.shape
(2039, 3000)
mlknn_classifier = MLkNN()
mlknn_classifier.fit(X_train_tfidf, y_train)
score = mlknn_classifier.score(X_test_tfidf, y_test)
new_sentences = [phpvar]
new_sentence_tfidf = vetorizar.transform(new_sentences)

predicted_sentences = mlknn_classifier.predict(new_sentence_tfidf)
print(predicted_sentences.toarray())
predicted = mlknn_classifier.predict(X_test_tfidf)

#print(accuracy_score(y_test, predicted))
#print(hamming_loss(y_test, predicted))
