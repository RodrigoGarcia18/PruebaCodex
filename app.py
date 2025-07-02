from flask import Flask, render_template, request, redirect, url_for
import sqlite3
import os

app = Flask(__name__)
DB_NAME = 'appointments.db'


def init_db():
    with sqlite3.connect(DB_NAME) as conn:
        c = conn.cursor()
        c.execute(
            'CREATE TABLE IF NOT EXISTS appointments (id INTEGER PRIMARY KEY AUTOINCREMENT, patient TEXT NOT NULL, vaccine TEXT NOT NULL, date TEXT NOT NULL)'
        )
        conn.commit()


def get_all():
    with sqlite3.connect(DB_NAME) as conn:
        c = conn.cursor()
        c.execute('SELECT id, patient, vaccine, date FROM appointments ORDER BY date')
        return c.fetchall()


def add_appointment(patient, vaccine, date):
    with sqlite3.connect(DB_NAME) as conn:
        c = conn.cursor()
        c.execute(
            'INSERT INTO appointments (patient, vaccine, date) VALUES (?, ?, ?)',
            (patient, vaccine, date),
        )
        conn.commit()


@app.route('/')
def index():
    appointments = get_all()
    return render_template('index.html', appointments=appointments)


@app.route('/schedule', methods=['GET', 'POST'])
def schedule():
    if request.method == 'POST':
        patient = request.form['patient']
        vaccine = request.form['vaccine']
        date = request.form['date']
        add_appointment(patient, vaccine, date)
        return redirect(url_for('index'))
    return render_template('schedule.html')


if __name__ == '__main__':
    init_db()
    app.run(debug=True)
