from flask import Flask, request, redirect, session
from twilio import twiml
import random

SECRET_KEY = str(random.random())
app = Flask(__name__)
app.config.from_object(__name__)



@app.route('/sms', methods=['POST'])
def sms():

    maturity = int(request.values.get('Body', None))
    count = session.get('count', 0)


    count += 1
    
    if count > 2:
        if maturity == 0:
            count = session.get('count', 0) - 2;
            maturity = - session.get('maturity', 0)
        total = maturity
    else:
        total = 0

    total += session.get('total', 0)
    
    
    session['count'] = count
    session['maturity'] = maturity
    session['total'] = total
    

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
                 22: "Residents have enough food throughout the year.",
                 23: "Residents have adequate housing.",
                 24:"Residents have access to essential health care. ",
                 25:"Survivors of slavery receive appropriate government compensation according to law.",
                 26:"Child survivors of slavery are attending school.",
                 27:"Adult survivors of slavery are earning a livelihood comparable to others in this community.",
                 28:"Survivors of slavery are accessing essential health care.",
                 29:"Survivors of slavery can access support for psychological trauma.",
                 30:"Survivors of slavery are protected from community-wide stigma.",
                 31:"There is an anti-slavery community group that meets regularly.",
                 32:"The community group has good leadership.",
                 33:"Slavery survivors participate effectively in the group.",
                 34:"Poorer households participate effectively in the group.",
                 35:"Discriminated groups participate effectively in the group.",
                 36:"Women participate effectively in the group.",
                 37:"The community group has strong internal cohesion.",
                 38:"The community group is well accepted within the community (while recognizing that those connected with slaveholders and trafficking may not accept the group).",
                 39:"The group can resolve internal disagreements and maintain unity and trust.",
                 40:"The group makes its own decisions, without external pressure.",
                 41:"The group develops good plans for keeping the village free from trafficking and slavery.",
                 42:"The group is effective at implementing its plans.",
                 43:"All members participate equitably in carrying out the work of the group.",
                 44:"The group is effective at advocacy with local authorities.",
                 45:"The group is effective at reducing slavery in the community. ",
                 46:"The group has built strong links with other anti-slavery community groups."
                 }
        
    resp = twiml.Response()
    resp.message(questions[count])
    
    return str(resp)

    
if __name__ == '__main__':
    app.run()
