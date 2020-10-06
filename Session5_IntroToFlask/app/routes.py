from app import app
from flask import render_template

# view functions
# decorators - modifies the function that follows it
# creates association between url and function

@app.route('/')
@app.route('/index')
def index():
    return render_template('index.html')

@app.route('/helloworld')
def sample():
    return '<h1>Hello World!</h1>'

@app.route('/teams')
def teams():
    return render_template('teams.html')

@app.route('/history')
def history():
    return render_template('history.html')
