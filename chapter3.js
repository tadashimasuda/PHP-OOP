//stringobject
var str1 = 'にわにはにわにわとりがいる';
console.log(str1.indexOf('にわ'));
console.log(str1.lastIndexOf('にわ'));
console.log(str1.indexOf('にわ',3));
console.log(str1.startsWith('にわ'));
console.log(str1.endsWith('いる'));
console.log(str1.includes('にわ'));

var str2 = 'Wingsプロジェクト';
var str3 = '叱られて';
var str4 = '    wings    ';

console.log(str2.charAt(4));
console.log(str2.slice(5));
console.log(str2.substring(5,8));
console.log(str2.substr(5,5));
console.log(str1.split('わ',3));
console.log(str2.charCodeAt(0));
console.log(String.fromCharCode(87,105,110,103));
console.log(str3.codePointAt(0));
console.log(str2.concat('あああ'));
console.log(str3.repeat(8));
console.log(str4.trim());

var ary = ['佐藤','高江','長田'];
var ary = new Array('佐藤','高江','長田');
var ary = new Array();
var ary = new Array(10);
console.log(ary.length)

var data = [2,3,4,5];
var h1 = document.getElementsByClassName('h1');

data.forEach(function(value,index,array){

    console.log(index,value * value); 
    console.log(array)
})

var result = data.map(function(value,index,array){
    return value * value;
})
console.log(result)

var result = data.some(function(value,index,array){
    return value % 3 ==0;
})

if(result){
    console.log ('３の倍数なう')
}
else{
    console.log('ちゃうって')
}

let m = new Map();
m.set('dog','ワン');
m.set('cat','ねこ');
m.set('mouse','マウ');

console.log(m.size);
console.log(m.get('dog'));
console.log(m.has('has'));

for(let key of m.keys()){
    console.log(key);
}

let s =new Set();
s.add(10);
s.add(5);
s.add(100);
s.add(50);

s.add(50);

console.log(s.has(100));
console.log(s.size)

for (let val of s.values()){
    console.log(val);
}

var d = new Date();











