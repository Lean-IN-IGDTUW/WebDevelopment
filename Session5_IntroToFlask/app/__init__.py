from flask import Flask

# create application object as an instance of class Flask
# __name__ is predefined Python variable

app = Flask(__name__)

from app import routes
