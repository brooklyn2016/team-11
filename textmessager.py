from flask import Flask, request, redirect, session
from twilio import twiml
import random

SECRET_KEY = str(random.random())
app = Flask(__name__)
app.config.from_object(__name__)


@app.route('/sms', methods=['POST'])
def sms():

    maturity = int(request.values.get('Body', None))
    maturity += session.get('maturity', 0)
    session['maturity'] = maturity
    
    count = session.get('count', 0)
    count += 1
    session['count'] = count
        

    questions = {1: "Ready to begin Community Maturity Tool. 3 indicates most mature, 2 indicates partially mature, 1 indicates not mature.",
                 2: "Traffickers, whether from the village or from outside the village, cannot operate any more.",
                 3: "No one residing in this village is in any form of slavery.",
                 4: "People who migrate from this community for work are NOT being trafficked.", 
                 5: "None of the children in this village are being exploited for commercial sex.",
                 6: "None of the children in this village are performing hazardous labor.",
                 7:
                 8:
                 9:
                 10:
                 11:
                 12
                 13
                 14
                 15
                 16
                 17
                 18
                 19
                 20
                 21
                 22
                 23
                 24
                 25
                 26
                 27
                 28
                 29
                 30
                 31
                 32
                 33
                 34
                 35
                 36
                 37
                 38
                 39:
                 40:
                 41:
                 42:
                 43:
                 44:
                 45: }

        
    resp = twiml.Response()
    resp.message(questions[count])
    
    return str(resp)

    
if __name__ == '__main__':
    app.run()
