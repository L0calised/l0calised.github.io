const express = require('express');
const mongoose = require ('mongoose');

async function main(){
    mongoose.connect('mongodb://127.0.0.1:27017/divyanshsharma');
}

main()
.then((res)=>{
    console.log("successfully connected database");
});

const bookschema = new mongoose.Schema({
  bookname: String, // String is shorthand for {type: String}
  author: String,
  quantity: String,
  price:Number
});

const one = mongoose.model('one', bookschema);