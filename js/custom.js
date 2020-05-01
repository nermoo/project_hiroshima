
// var myarray=[12,34,56];
// var arrayPopppedElement=myarray.pop();
// console.log(arrayPopppedElement);
// console.log(myarray);
// myarray.shift();
// console.log(myarray);
// function firstone(){
//     console.log("first function");
// }
// firstone();
// function adder(a,b){
//     var sum=a+b;
//     console.log(sum);
// }
// adder();
// 
// function isLess(a,b){
//     return a>b;
// }
// console.log(isLess(12,4));

// var man={
//     "name":"aravinda",
//     "legs":"3",
//     "hands":"2"
// };
// console.log(man.name);
// var hands=man["hands"];
// console.log(hands);

// var classRoom={
//     1:"aravinda",
//     2:"Kolitha",
//     3:"Nawarathna",
//     4:"amal",
//     5:"Kamal",
//     6:"nimal"
// };
// var people={
//     "name":"34",
//     "Addreses":"23",
//     "families":"12"
// };
// function nameFinder(val){
//     var result=classRoom[val];
//     return result;
// }
// function peopleFinder(value){
//     var person=people[value];
//     return person;
// }
// var val=3;
// var value="name";
// console.log(nameFinder(val));
// console.log(peopleFinder(value));

// function propFinder(myProp){
//     if(classRoom.hasOwnProperty(myProp)){
//         return classRoom[myProp];}
//     else{    
//     return "nor found";}    
// }
// var myProp=1;
// var result2=propFinder(myProp);
// console.log(result2);

// var car={
//     "inside":{
//         "glove box":"Maps",
//         "carpets":"foot wear"
//     },
//     "outside":"Wheels",
//     "Roof":"sun roof"
// }
// var gloveBox=car.inside["glove box"];
// console.log(gloveBox);

// var array1=[
//     {
//         "name":"aravinda",
//         list:["cricket","basketball","swimming"]
//     },
//     {
//         "age":23,
//         list2:["crysis1","prototype","cod4"]
//     }
// ];

// var data=array1[1].list2[2];
// console.log(data);

// function makemultiplier(multiplier){
//     var insideFunc=function(x){
//         return multiplier*x;
//     };
//     return insideFunc;
// }

// var multiplyBy3=makemultiplier(3);
// console.log(multiplyBy3(45));
// var doubleAll=makemultiplier(2);
// console.log(doubleAll(12));

// function doFunctionOn(x,operation){
//     return operation(x);
// }

// var result=doFunctionOn(12,multiplyBy3);
// console.log(result);

// function hello(){
//     console.log(this);
// }
// hello();

// function square1(width){
//     this.side=width;
    
// }
// square1.prototype.area3=function(){
//     return width*width;
// }
// var sides=new square1(12);
// console.log(sides.area3());

// function area2(height){
//     this.side3=height;
// }
// var myside=new area2(12);
// console.log(myside);

// var literalobj={
//     radius:10,
//     getArea: function(){
//         var self=this;
//         console.log(this.radius);
        
//         var increase1=function(){
//             self.radius=20;
//         };
//         increase1();
//         console.log(this.radius);
//         return Math.PI*Math.pow(this.radius, 2);
//     }

// }

// console.log(literalobj.getArea());

// var array1=new Array();
// array1[0]="aravinda";
// array1[1]="kolitha";
// array1[2]=23;
// array1[3]="nissan skyline gtr r34";
// console.log(array1);
// for(var i in array1){
//     console.log(array1[i]);
// }
// var myobj={
//     name:"aravinda",
//     age:23,
//     class:"E"
// };
// for(var i in myobj){
//     console.log(myobj[i]);
// }

// console.log(document.getElementById("input-btn"));

// function sayHello(){
//     var name=document.getElementById("input-btn").value;
//     var message="<h2>hello " +name +" !</h2>";
//     // document.getElementById("text-message").textContent=message;
//     document.getElementById("text-message").innerHTML=message;
//     if(name==="nigga"){
//     var maintp= document.querySelector("#topic").textContent;
//     maintp+=(" lil bitch");
//     document.querySelector("#topic").textContent=maintp;

// }
// }

const person={
    name:"aravinda",
    age:23
};

const sentence='my name'+ person.name +'and my age is' +person.age;
console.log(sentence);