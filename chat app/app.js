const express = require("express");
const app = express();
const fs = require('fs');
const bodyparser = require("body-parser");

const home = fs.readFileSync('./index.html');
const about = fs.readFileSync('./about.html');
const contact = fs.readFileSync('./contact.html');

const mongoose = require('mongoose');
mongoose.connect('mongodb://localhost/anand', {useNewUrlParser: true});



const hostname = '127.0.0.1';
const port = 5500;

var educationSchema = new mongoose.Schema({
    myname: String,
    myrole: String,
    mystd: String,
    myemail: String,
    mynumber: String,
    mycity: String,
    mystate: String,
    mygender: String,
    mycheckbox: String,
    mytext: String
  });

var eduweb = mongoose.model('eduweb', educationSchema);

app.get("/website/code/index.html", (req, res)=>{ 
    res.end(home);
});
 
app.get("/home", (req, res)=>{ 
    res.end(home);
});

app.get("/about", (req, res)=>{
    res.end(about);
});

app.get("/phy", (req, res)=>{
    res.send("This is physics");
});

app.get("/chem", (req, res)=>{
    res.send("This is Chemistry");
});

app.get("/math", (req, res)=>{
    res.send("This is maths");
});

app.get("/sisu", (req, res)=>{
    res.end(contact);
});

app.post("/sisu", (req, res)=>{
    var myData = new eduweb(req.body);
    console.log(myData);
    myData.save().then(()=>{
        res.send("Your details are successfully registered and the phone number is your KEY");
    }).catch(()=>{
        res.status(400).send("Your details are not registered...Please, try again");
    });
});

app.get("/chat", (req, res)=>{
    res.end(contact);
});

app.listen(port, hostname, () => {
    console.log(`Server running at http://${hostname}:${port}/`);
});
