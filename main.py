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


def md(f):
    fn = os.path.join(md_dir, f + '.md')
    with codecs.open (fn, "r", encoding='UTF-8') as myfile:
        data=myfile.read().replace('\n', '')
    return Markup(markdown.markdown(data))


@app.route("/details")
def details():
    rules = md('rules')
    staff = md('staff')
    prices = md('prices')
    sponsers = md('sponsers')
    return render_template('details.html', **locals())


@app.route("/signup")
def signup():
    return render_template('signup.html')

@app.route("/gallery")
def gallery():
    return render_template('gallery.html')

if __name__ == "__main__":
    print "Starting dimonahack.com..."
    app.run(port=8576)