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
                 24:"Residents have access to essential health care. ";
                 25:"Survivors of slavery receive appropriate government compensation according to law.";
                 26:"Child survivors of slavery are attending school.";
                 27:"Adult survivors of slavery are earning a livelihood comparable to others in this community.";
                 28:"Survivors of slavery are accessing essential health care.";
                 29:"Survivors of slavery can access support for psychological trauma.";
                 30:"Survivors of slavery are protected from community-wide stigma.";
                 31:"There is an anti-slavery community group that meets regularly.";
                 32:"The community group has good leadership.";
                 33:"Slavery survivors participate effectively in the group.";
                 34:"Poorer households participate effectively in the group.";
                 35:"Discriminated groups participate effectively in the group.";
                 36:"Women participate effectively in the group.";
                 37:"The community group has strong internal cohesion.";
                 38:"The community group is well accepted within the community (while recognizing that those connected with slaveholders and trafficking may not accept the group).";
                 39:"The group can resolve internal disagreements and maintain unity and trust.";
                 40:"The group makes its own decisions, without external pressure. ";
                 41:"The group develops good plans for keeping the village free from trafficking and slavery.";
                 42:"The group is effective at implementing its plans. ";
                 43:"All members participate equitably in carrying out the work of the group.";
                 44:"The group is effective at advocacy with local authorities.";
                 45:"The group is effective at reducing slavery in the community. ";
                 46:"The group has built strong links with other anti-slavery community groups."
                 }

        
    resp = twiml.Response()
    resp.message(questions[count])
    
    return str(resp)

    
if __name__ == '__main__':
    app.run()
