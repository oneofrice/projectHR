from flask import Flask, jsonify
from flask import request
from model import predictResult
import json

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
    result = predictResult(data)
    json_result = { "result" : result }
    return jsonify(json_result)

if __name__ == '__main__':
    app.debug = True
    app.run()