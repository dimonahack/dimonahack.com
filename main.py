import markdown
from flask import Flask, render_template, Markup
app = Flask(__name__)

import codecs
import os
current_dir = os.path.dirname(__file__)
md_dir = os.path.join(current_dir, 'markdown')

@app.route("/")
def hello():
    return render_template('index.html')


@app.route("/details")
def details():

    fn = os.path.join(md_dir, 'rules.md')
    with codecs.open (fn, "r", encoding='UTF-8') as myfile:
        data=myfile.read().replace('\n', '')
    rules = Markup(markdown.markdown(data))
    return render_template('details.html', **locals())


@app.route("/signup")
def signup():
    return render_template('signup.html')

if __name__ == "__main__":
    app.run(port=8576, debug=True)