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
                 7: "Residents in this village know how to protect themselves from trafficking during migration for work.(facilitator questions: In cases where a household member is migrating for work, are they: 1) counseled about the risks? 2) told about the measures to take to protect themselves? and 3) told whom to contact if they find themselves in slavery?)",
                 8: "Residents understand the risks of sending children to distant jobs, e.g. domestic work, mining or stone quarries, and circuses. ",
                 9: "Residents are able to identify and pressure known traffickers to leave when they appear in the community",
                 10: "Residents in this village know how to avoid debt bondage.",
                 11: "Residents understand the risks of early or forced marriage and false offers of marriage",
                 12: "Residents are able to confront domestic violence.",
                 13: "Residents know how to file criminal complaints with the police.",
                 14: "esidents understand basic human rights. (facilitator questions: How many residents do you think know about freedom of movement? freedom to join groups and assemble? right to education?)",
                 15: "Residents are able to list some of the country’s legal rights for workers. (facilitator questions: How many residents do you think know about minimum wages? The right to protection from violence and threats in the workplace? the right to prosecute traffickers? protections from child labor?) ",
                 16: "Residents know it is a violation of human rights to use force, threat, or fraud to compel someone to go to a workplace or prevent someone from leaving a job.",
                 17: "Residents are clearly and non-violently able to communicate their rights to officials and others in power",
                 18: "Residents know how to demand and obtain benefits to which they may be entitled from the government. (facilitator questions: How many residents do you think know how to demand birth registration? pensions? social security? basic social services such as health care and education?)",
                 19: "Residents have economic stability.(facilitator questions: how many families have enough steady income to allow them to withstand unexpected financial demands (such as a family medical emergency) while continuing to eat properly, be housed and attend school? How many families have income generating projects? ",
                 20: "Children in this community attend school.",
                 21: "Residents can obtain loans on fair terms.",
                 22: "esidents have enough food throughout the year.",
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
