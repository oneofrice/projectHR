from flask import Flask, jsonify
from flask import request
from flask_cors import CORS, cross_origin
from model import predictResult
import json

app = Flask(__name__)
cors = CORS(app)
app.config['CORS_HEADERS'] = 'Content-Type'

# @app.route('/')
# def hello_world():
#     return 'Hello World!'

@app.route('/')
@cross_origin()
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