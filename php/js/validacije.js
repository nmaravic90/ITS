function formValidatorLogin()
{
var user = document.login.ime.value;
var pass = document.login.sifra.value;

if(user == '')
{
    alert("morate uneti korisnicko ime!");
    return false;
}
if(pass == '')
{
    alert("morate uneti sifru!");
    return false;
        
}
}


function formValidatorRegistracija()
{
var ime = document.register.ime.value;
var prezime = document.register.prezime.value;
var korisnicko_ime = document.register.korisnicko_ime.value;
var sifra = document.register.sifra.value;

if(ime == '')
{
    alert("Morate uneti vase ima!");
    return false;
}
if(prezime == '')
{
    alert("Morate uneti vase prezime!");
    return false;
}
if(korisnicko_ime == '')
{
    alert("Morate uneti korisnicko ime!");
    return false;
}
if(sifra == '')
{
    alert("Morate uneti sifru!");
    return false;
}
}

function formValidatorMail()
{
var naslov = document.mejl.naslov.value;
var ime = document.mejl.ime_i_prezime.value;
var mail = document.mejl.mail.value;
var poruka = document.mejl.poruka.value;

if(naslov == '')
{
    alert("Morate uneti Naslov!");
    return false;
}
if(ime == '')
{
    alert("Morate uneti vase ime i prezime!");
    return false;
}
if(mail == '')
{
    alert("Morate uneti vas mail!");
    return false;
}
if(poruka == '')
{
    alert("Polje za poruku ne sme biti prazno");
    return false;
}
}






function CPU(){
var x = document.getElementById("cpu");
var cena = x.options[x.selectedIndex].value;  
document.getElementById('cenaCPU').value = cena;

}


function MB(){
var x = document.getElementById("mboard");
var cena = x.options[x.selectedIndex].value;  
document.getElementById('cenaMB').value = cena;
}



function HDD(){
var x = document.getElementById("hard");
var cena = x.options[x.selectedIndex].value;  
document.getElementById('cenaHDD').value = cena;
}

function RAM(){
var x = document.getElementById("ram");
var cena = x.options[x.selectedIndex].value;  
document.getElementById('cenaRAM').value = cena;
}

function GCARD(){
var x = document.getElementById("gcard");
var cena = x.options[x.selectedIndex].value;  
document.getElementById('cenaGCARD').value = cena;
}

function BOX(){
var x = document.getElementById("box");
var cena = x.options[x.selectedIndex].value;  
document.getElementById('cenaBOX').value = cena;
}

function NAPON(){
var x = document.getElementById("napon");
var cena = x.options[x.selectedIndex].value;  
document.getElementById('cenaNAPON').value = cena;
}


function sum(){
    var cpu = document.getElementById('cenaCPU').value;
    var mb = document.getElementById('cenaMB').value;
    var hdd = document.getElementById('cenaHDD').value;
    var ram = document.getElementById('cenaRAM').value;
    var gcard = document.getElementById('cenaGCARD').value;
    var box = document.getElementById('cenaBOX').value;
    var napon = document.getElementById('cenaNAPON').value;
        if(cpu==""){
            cpu=0;
        }
         if(mb==""){
            mb=0;
        }
        if(hdd==""){
            hdd=0;
        }
        if(ram==""){
            ram=0;
        }
        if(gcard==""){
            gcard=0;
        }
        if(box==""){
            box=0;
        }
        if(napon==""){
            napon=0;
        }

        var sum =parseInt(cpu)+parseInt(mb)+parseInt(hdd)+parseInt(ram)+parseInt(gcard)
        +parseInt(box)+parseInt(napon);        
       document.getElementById('cena').value = sum;


    var a = document.getElementById("cpu");
    var cpu = a.options[a.selectedIndex].text;
    var b = document.getElementById("mboard");
    var mb = b.options[b.selectedIndex].text;
    var c = document.getElementById("hard");
    var hdd = c.options[c.selectedIndex].text;
    var d = document.getElementById("ram");
    var ram = d.options[d.selectedIndex].text;
     var e = document.getElementById("gcard");
    var gcard = e.options[e.selectedIndex].text;
     var f = document.getElementById("box");
    var box = f.options[f.selectedIndex].text;
     var c = document.getElementById("napon");
    var napon = c.options[c.selectedIndex].text;

    if(cpu=="Izaberi komponentu!"){
            cpu="";
        }
    if(mb=="Izaberi komponentu!"){
            mb="";
        }
    if(hdd=="Izaberi komponentu!"){
            hdd="";
        }
    if(ram=="Izaberi komponentu!"){
            ram="";
        }
    if(gcard=="Izaberi komponentu!"){
            gcard="";
        }
    if(box=="Izaberi komponentu!"){
            box="";
        }
    if(napon=="Izaberi komponentu!"){
            napon="";
        }



    var com = cpu+"\n"+mb+"\n"+hdd+"\n"+ram+"\n"+gcard+"\n"+box+"\n"+napon;
    document.getElementById('komponente').value= com;    
   }