from flask import Flask
from flask import request
from model import predictResult

app = Flask(__name__)

# @app.route('/')
# def hello_world():
#     return 'Hello World!'

@app.route('/')
def predict():
    data = request.args
    # if request.args.get('data') != False:
    #     data = request.args.get('data')
    # else:
    #      data = 'empty'
    return predictResult(data)

if __name__ == '__main__':
    app.debug = True
    app.run()