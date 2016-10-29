from flask import Flask, request, redirect, session
from twilio import twiml
import random

SECRET_KEY = str(random.random())
app = Flask(__name__)
app.config.from_object(__name__)


@app.route('/sms', methods=['POST'])
def sms():

    count = session.get('count', 0)
    count += 1
    session['count'] = count

    questions = {1: 
                 2:
                 3:
                 }
    
        
    resp = twiml.Response()
    resp.message(questions[count])
    
    return str(resp)


    
if __name__ == '__main__':
    app.run()
