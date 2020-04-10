from flask import Flask, render_template, request
import numpy as np
from scipy import interpolate

app = Flask(__name__)

@app.route('/')
def student():
   return render_template('input.html')

def had_fl(mx):
    hadx = np.loadtxt("data/had_data.txt")
    ynl = []
    for i in range(len(hadx)):
            f = interpolate.interp1d(np.linspace(7,16,37),hadx[i,1:38])
            ynlintrp = f(np.log10(mx))
            ynl = np.append(ynl,ynlintrp)
    hadout = np.append([hadx[:,0]],[ynl],axis = 0)
    return hadout

def lep_fl(mx):
    lepx = np.loadtxt("data/lep_data.txt")
    ynl = []
    for i in range(len(lepx)):
            f = interpolate.interp1d(np.linspace(7,16,37),lepx[i,1:38])
            ynlintrp = f(np.log10(mx))
            ynl = np.append(ynl,ynlintrp)
    lepout = np.append([lepx[:,0]],[ynl],axis = 0)
    return lepout

@app.route('/',methods = ['POST', 'GET'])
def result():
   if request.method == 'POST':
      inp = request.form.get('omega')
      inp = float(inp)
      res = []
      x = []
      xlst = np.logspace(-5,0,100)
      ary_l = np.transpose(lep_fl(inp))
      ary_h = np.transpose(had_fl(inp))
      res = np.append([ary_h[:,0]],[ary_h[:,1]],axis = 0)
      res = np.append(res,[ary_l[:,1]],axis = 0)
      res = np.transpose(res)
      return render_template("input.html",result = res, ms = inp)

if __name__ == '__main__':
   app.run(debug = True)
