from flask import Flask, render_template,redirect, url_for, request, session
from pymongo import MongoClient
from bson import ObjectId
from datetime import datetime
import hashlib
import time

import mysql.connector
app = Flask(__name__)
app.config['SECRET_KEY'] = 'januar2020'
mydb = mysql.connector.connect(
	host="localhost",
	user="root",
	password="",
	database="wsit"
    )
@app.route('/')
@app.route('/index')
def index():
	return render_template('index.html')

@app.route('/raspored')
def raspored():
	cur = mydb.cursor()
	rez = cur.execute("SELECT * FROM raspored")
	glavniRez = cur.fetchall()

	nastavnici = []
	ucionica = []


	for i in glavniRez:
		if i[3] not in nastavnici:
			nastavnici.append(i[3])
			print(nastavnici)
	
	for i in glavniRez:
		if i[7] not in ucionica:
			ucionica.append(i[7])
			print(ucionica)

	return render_template('raspored.html', raspored=glavniRez, nastavnici=nastavnici, ucionica=ucionica)



if __name__ == '__main__':
	app.run(debug=True)