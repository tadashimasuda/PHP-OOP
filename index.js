/*var current = new Date();
var result = document.getElementById('p1');
result.textContent = current.toLocaleString();

var dom = document.getElementsByTagName('a');
console.log(dom.item(0).href);

var dom = document.getElementsByName('time');
dom[0].value = current.toLocaleTimeString();

var list = document.getElementsByClassName('a');
for (var i = 0; i < list.length; i++) {
    console.log(list.item(i).href)
}

var list1 = document.getElementById('x1')
//var child = list1.childNodes;

//for (var i = 0; list1.length > i; i++) {
  //  console.log(list1.item(i).value)
//}
/*document.addEventListener('DOMContentLoaded', function () {
    var logo = document.getElementById('logo');
    var attrs = logo.attributes;
    for (var i = 0, len = attrs.length; i < len; i++) {
        var attr = attrs.item(i);
        console.log(attr.name + ':' + attr.value);
    }
}, false);

document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('btn2' ).addEventListener('click', function () {
        var result = [];
        var foods = document.getElementsByName('food2');
        for (var i = 0, len = foods.length; i < len; i++) {
            var food = foods.item(i);
            if (food.checked) {
                result.push(food.value);
            }
        }
        window.alert(result.toString());
    }, false);
}, false);

document.addEventListener('DOMContentLoaded', function () {
    var getRadioValue = function(name) {
        var result = '';
        var elems = document.getElementsByName(name);

        for (var i = 0, len = elems.length; i < len; i++) {
            var elem = elems.item(i);
            if (elem.checked) {
                result = elem.value;
                break;
            }
        }
        return result;
    };
    document.getElementById('btn').addEventListener('click', function () {
        window.alert(getRadioValue('food'));
    }, false);
},false);

document.addEventListener('DOMContentLoaded',function(){
    var getSelectValue = function(name){
        var result =[];
        var opts = document.getElementById(name).options;

        for(var i =0,len=opts.length;i<len;i++){
            var opt = opts.item(i);
            if(opt.selected){
                result.push(opt.value);
            }
        }
        return result;
    };
    document.getElementById('btn3').addEventListener('click',function(){
        window.alert(getSelectValue('food3'));
    },false);
},false);*/
/*
window.addEventListener('DOMContentLoaded',function(){
    document.getElementById('file').addEventListener('change',function(e){
        var inputs = document.getElementById('file').files;
        for(var i = 0,len=inputs.length;i<len;i++){
            var input = inputs[i];
            console.log('fairumei'+input.name);
            console.log('種類'+input.type);
            console.log('size'+input.size/1024+'KB');
            console.log('最終更新日'+input.lastModifiedDate);
        }
    })
})
window.addEventListener('DOMContentLoaded',function(){
    document.getElementById("file").addEventListener('change',function(e){
        var input = document.getElementById('file').files[0];
        var reader = new FileReader();
        reader.addEventListener('load',function(){
            document.getElementById("result").textContent = reader.result;
        },true);
        reader.readAsDataURL(input,'UTF-8');
    })
})
*/
/*
document.addEventListener('DOMContentLoaded',function(){
    var list = document.getElementById('list');
    var pic = document.getElementById('pic');
    var del = document.getElementById('del');

    list.addEventListener('click',function(e){
        var isbn =e.target.getAttribute('data-isbn');

        if (isbn) {
            var img = document.createElement('img');
            img.src = 'http://www.wings.msn.to/books/'+isbn+'/'+isbn+'.jpg';
            img.alt = e.innerHTML;
            img.height = 150;
            img.width = 108;

            if(pic.getElementsByTagName('img').length > 0){
                pic.replaceChild(img,pic.lastChild);
            }else{
                del.disabled = false;
                pic.appendChild(img);
            }
        }
    },false);

    del.addEventListener('click',function(){
        pic.removeChild(pic.lastChild);
        del.disabled = true;
    },false);
},false);
*/
/*document.addEventListener('DOMContentLoaded', function () {
    var elem = document.getElementById('elem');

    elem.addEventListener('mouseover', function () {
        this.style.backgroundColor = 'Yellow';
    }, false);

    elem.addEventListener('mouseout', function () {
        this.style.backgroundColor = '';
    }, false);
}, false);
*/

document.addEventListener('DOMContentLoaded', function () {
    var elem = document.getElementById('elem');

    elem.addEventListener('click', function () {
        this.className = (this.className === 'highlight' ? '' : 'highlight');

    }, false);
},false);





