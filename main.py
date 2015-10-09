from flask import Flask, render_template
app = Flask(__name__)

@app.route("/")
def hello():
    return render_template('index.html')

@app.route("/details")
def details():
    return render_template('details.html')

if __name__ == "__main__":
    app.run(port=8576)