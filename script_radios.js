let r1 = document.querySelector("#radio1");

let r2 = document.querySelector("#radio2");

let r3 = document.querySelector("#radio3");      

const boton1 = document.getElementById("1radio"),boton2=document.getElementById("2radio"),boton3 = document.getElementById("3radio");


    boton1.addEventListener("click",() =>radio1(r1,r2,r3,boton1,boton2,boton3));
    boton2.addEventListener("click",() =>radio2(r1,r2,r3,boton1,boton2,boton3));
    boton3.addEventListener("click",() =>radio3(r1,r2,r3,boton1,boton2,boton3));

function radio1(rad1,rad2,rad3,b1,b2,b3){
     rad1.checked = true;
     rad2.checked = false;
     rad3.checked = false;
     b1.style.backgroundColor="#fff";
     b2.style.backgroundColor="";
     b3.style.backgroundColor="";
}
function radio2(rad1,rad2,rad3,b1,b2,b3){
     rad1.checked = false;
     rad2.checked = true;
     rad3.checked = false;
     b1.style.backgroundColor="";
     b2.style.backgroundColor="#fff";
     b3.style.backgroundColor="";
}
function radio3(rad1,rad2,rad3,b1,b2,b3){
     rad1.checked = false;
     rad2.checked = false;
     rad3.checked = true;
     b1.style.backgroundColor="";
     b2.style.backgroundColor="";
     b3.style.backgroundColor="#fff";
}









//radio2

let r4 = document.querySelector("#radio1_2");

let r5 = document.querySelector("#radio2_2");

let r6 = document.querySelector("#radio3_2");      

const boton4 = document.getElementById("4radio"),boton5=document.getElementById("5radio"),boton6 = document.getElementById("6radio");


boton4.addEventListener("click", () =>radio1(r4,r5,r6,boton4,boton5,boton6));
boton5.addEventListener("click", () =>radio2(r4,r5,r6,boton4,boton5,boton6));
boton6.addEventListener("click", () =>radio3(r4,r5,r6,boton4,boton5,boton6));





//radio3

let r7 = document.querySelector("#radio1_3");

let r8 = document.querySelector("#radio2_3");

let r9 = document.querySelector("#radio3_3");      

const boton7 = document.getElementById("7radio"),boton8=document.getElementById("8radio"),boton9 = document.getElementById("9radio");


boton7.addEventListener("click",() =>radio1(r7,r8,r9,boton7,boton8,boton9));
boton8.addEventListener("click",() =>radio2(r7,r8,r9,boton7,boton8,boton9));
boton9.addEventListener("click",() =>radio3(r7,r8,r9,boton7,boton8,boton9));






//radio4

let r10 = document.querySelector("#radio1_4");

let r11= document.querySelector("#radio2_4");

let r12 = document.querySelector("#radio3_4");      

const boton10 = document.getElementById("10radio"),boton11=document.getElementById("11radio"),boton12 = document.getElementById("12radio");


boton10.addEventListener("click",() =>radio1(r10,r11,r12,boton10,boton11,boton12));
boton11.addEventListener("click",() =>radio2(r10,r11,r12,boton10,boton11,boton12));
boton12.addEventListener("click",() =>radio3(r10,r11,r12,boton10,boton11,boton12));




//radio5

let r13 = document.querySelector("#radio1_5");

let r14= document.querySelector("#radio2_5");

let r15 = document.querySelector("#radio3_5");      

const boton13 = document.getElementById("13radio"),boton14=document.getElementById("14radio"),boton15 = document.getElementById("15radio");


boton13.addEventListener("click",() =>radio1(r13,r14,r15,boton13,boton14,boton15));
boton14.addEventListener("click",() =>radio2(r13,r14,r15,boton13,boton14,boton15));
boton15.addEventListener("click",() =>radio3(r13,r14,r15,boton13,boton14,boton15));





//radio6

let r16 = document.querySelector("#radio1_13");

let r17= document.querySelector("#radio2_13");

let r18 = document.querySelector("#radio3_13");      

const boton16 = document.getElementById("16radio"),boton17=document.getElementById("17radio"),boton18 = document.getElementById("18radio");


boton16.addEventListener("click",() =>radio1(r16,r17,r18,boton16,boton17,boton18));
boton17.addEventListener("click",() =>radio2(r16,r17,r18,boton16,boton17,boton18));
boton18.addEventListener("click",() =>radio3(r16,r17,r18,boton16,boton17,boton18));




//radio7

let r19 = document.querySelector("#radio1_14");

let r20= document.querySelector("#radio2_14");

let r21 = document.querySelector("#radio3_14");      

const boton19 = document.getElementById("19radio"),boton20=document.getElementById("20radio"),boton21 = document.getElementById("21radio");


boton19.addEventListener("click",() =>radio1(r19,r20,r21,boton19,boton20,boton21));
boton20.addEventListener("click",() =>radio2(r19,r20,r21,boton19,boton20,boton21));
boton21.addEventListener("click",() =>radio3(r19,r20,r21,boton19,boton20,boton21));





//radio8

let r22 = document.querySelector("#radio1_6");

let r23= document.querySelector("#radio2_6");

let r24 = document.querySelector("#radio3_6");      

const boton22 = document.getElementById("22radio"),boton23=document.getElementById("23radio"),boton24 = document.getElementById("24radio");


boton22.addEventListener("click",() =>radio1(r22,r23,r24,boton22,boton23,boton24));
boton23.addEventListener("click",() =>radio2(r22,r23,r24,boton22,boton23,boton24));
boton24.addEventListener("click",() =>radio3(r22,r23,r24,boton22,boton23,boton24));







//radio9

let r25 = document.querySelector("#radio1_7");

let r26= document.querySelector("#radio2_7");

let r27 = document.querySelector("#radio3_7");      

const boton25 = document.getElementById("25radio"),boton26=document.getElementById("26radio"),boton27 = document.getElementById("27radio");


boton25.addEventListener("click",() =>radio1(r25,r26,r27,boton25,boton26,boton27));
boton26.addEventListener("click",() =>radio2(r25,r26,r27,boton25,boton26,boton27));
boton27.addEventListener("click",() =>radio3(r25,r26,r27,boton25,boton26,boton27));




//radio10

let r28 = document.querySelector("#radio1_8");

let r29= document.querySelector("#radio2_8");

let r30 = document.querySelector("#radio3_8");      

const boton28 = document.getElementById("28radio"),boton29=document.getElementById("29radio"),boton30 = document.getElementById("30radio");


boton28.addEventListener("click",() =>radio1(r28,r29,r30,boton28,boton29,boton30));
boton29.addEventListener("click",() =>radio2(r28,r29,r30,boton28,boton29,boton30));
boton30.addEventListener("click",() =>radio3(r28,r29,r30,boton28,boton29,boton30));



//radio11

let r34 = document.querySelector("#radio1_10");

let r35= document.querySelector("#radio2_10");

let r36 = document.querySelector("#radio3_10");      

const boton34 = document.getElementById("34radio"),boton35=document.getElementById("35radio"),boton36 = document.getElementById("36radio");


boton34.addEventListener("click",() =>radio1(r34,r35,r36,boton34,boton35,boton36));
boton35.addEventListener("click",() =>radio2(r34,r35,r36,boton34,boton35,boton36));
boton36.addEventListener("click",() =>radio3(r34,r35,r36,boton34,boton35,boton36));



//radio12

let r31 = document.querySelector("#radio1_9");

let r32= document.querySelector("#radio2_9");

let r33 = document.querySelector("#radio3_9");      

const boton31 = document.getElementById("31radio"),boton32=document.getElementById("32radio"),boton33 = document.getElementById("33radio");


boton31.addEventListener("click",() =>radio1(r31,r32,r33,boton31,boton32,boton33));
boton32.addEventListener("click",() =>radio2(r31,r32,r33,boton31,boton32,boton33));
boton33.addEventListener("click",() =>radio3(r31,r32,r33,boton31,boton32,boton33));





//radio13

let r37 = document.querySelector("#radio1_11");

let r38= document.querySelector("#radio2_11");

let r39 = document.querySelector("#radio3_11");      

const boton37 = document.getElementById("37radio"),boton38=document.getElementById("38radio"),boton39 = document.getElementById("39radio");


boton37.addEventListener("click",() =>radio1(r37,r38,r39,boton37,boton38,boton39));
boton38.addEventListener("click",() =>radio2(r37,r38,r39,boton37,boton38,boton39));
boton39.addEventListener("click",() =>radio3(r37,r38,r39,boton37,boton38,boton39));




//radio14

let r40 = document.querySelector("#radio1_12");

let r41= document.querySelector("#radio2_12");

let r42 = document.querySelector("#radio3_12");      

const boton40 = document.getElementById("40radio"),boton41=document.getElementById("41radio"),boton42 = document.getElementById("42radio");


boton40.addEventListener("click",() =>radio1(r40,r41,r42,boton40,boton41,boton42));
boton41.addEventListener("click",() =>radio2(r40,r41,r42,boton40,boton41,boton42));
boton42.addEventListener("click",() =>radio3(r40,r41,r42,boton40,boton41,boton42));





//radio15

let r43 = document.querySelector("#radio1_15");

let r44= document.querySelector("#radio2_15");

let r45 = document.querySelector("#radio3_15");      

const boton43 = document.getElementById("43radio"),boton44=document.getElementById("44radio"),boton45 = document.getElementById("45radio");


boton43.addEventListener("click",() =>radio1(r43,r44,r45,boton43,boton44,boton45));
boton44.addEventListener("click",() =>radio2(r43,r44,r45,boton43,boton44,boton45));
boton45.addEventListener("click",() =>radio3(r43,r44,r45,boton43,boton44,boton45));



//radio16

let r46 = document.querySelector("#radio1_16");

let r47= document.querySelector("#radio2_16");

let r48 = document.querySelector("#radio3_16");      

const boton46 = document.getElementById("46radio"),boton47=document.getElementById("47radio"),boton48 = document.getElementById("48radio");


boton46.addEventListener("click",() =>radio1(r46,r47,r48,boton46,boton47,boton48));
boton47.addEventListener("click",() =>radio2(r46,r47,r48,boton46,boton47,boton48));
boton48.addEventListener("click",() =>radio3(r46,r47,r48,boton46,boton47,boton48));



//radio17

let r49 = document.querySelector("#radio1_17");

let r50= document.querySelector("#radio2_17");

let r51 = document.querySelector("#radio3_17");      

const boton49 = document.getElementById("49radio"),boton50=document.getElementById("50radio"),boton51 = document.getElementById("51radio");


boton49.addEventListener("click",() =>radio1(r49,r50,r51,boton49,boton50,boton51));
boton50.addEventListener("click",() =>radio2(r49,r50,r51,boton49,boton50,boton51));
boton51.addEventListener("click",() =>radio3(r49,r50,r51,boton49,boton50,boton51));






//radio18

let r52 = document.querySelector("#radio1_18");

let r53= document.querySelector("#radio2_18");

let r54 = document.querySelector("#radio3_18");      

const boton52 = document.getElementById("52radio"),boton53=document.getElementById("53radio"),boton54 = document.getElementById("54radio");


boton52.addEventListener("click",() =>radio1(r52,r53,r54,boton52,boton53,boton54));
boton53.addEventListener("click",() =>radio2(r52,r53,r54,boton52,boton53,boton54));
boton54.addEventListener("click",() =>radio3(r52,r53,r54,boton52,boton53,boton54));



//radio19

let r55 = document.querySelector("#radio1_19");

let r56= document.querySelector("#radio2_19");

let r57 = document.querySelector("#radio3_19");      

const boton55 = document.getElementById("55radio"),boton56=document.getElementById("56radio"),boton57 = document.getElementById("57radio");


boton55.addEventListener("click",() =>radio1(r55,r56,r57,boton55,boton56,boton57));
boton56.addEventListener("click",() =>radio2(r55,r56,r57,boton55,boton56,boton57));
boton57.addEventListener("click",() =>radio3(r55,r56,r57,boton55,boton56,boton57));



//radio20

let r58 = document.querySelector("#radio1_20");

let r59= document.querySelector("#radio2_20");

let r60 = document.querySelector("#radio3_20");      

const boton58 = document.getElementById("58radio"),boton59=document.getElementById("59radio"),boton60 = document.getElementById("60radio");


boton58.addEventListener("click",() =>radio1(r58,r59,r60,boton58,boton59,boton60));
boton59.addEventListener("click",() =>radio2(r58,r59,r60,boton58,boton59,boton60));
boton60.addEventListener("click",() =>radio3(r58,r59,r60,boton58,boton59,boton60));



//radio21

let r61 = document.querySelector("#radio1_21");

let r62= document.querySelector("#radio2_21");

let r63 = document.querySelector("#radio3_21");      

const boton61 = document.getElementById("61radio"),boton62=document.getElementById("62radio"),boton63 = document.getElementById("63radio");


boton61.addEventListener("click",() =>radio1(r61,r62,r63,boton61,boton62,boton63));
boton62.addEventListener("click",() =>radio2(r61,r62,r63,boton61,boton62,boton63));
boton63.addEventListener("click",() =>radio3(r61,r62,r63,boton61,boton62,boton63));



//radio22

let r64 = document.querySelector("#radio1_22");

let r65= document.querySelector("#radio2_22");

let r66 = document.querySelector("#radio3_22");      

const boton64 = document.getElementById("64radio"),boton65=document.getElementById("65radio"),boton66 = document.getElementById("66radio");


boton64.addEventListener("click",() =>radio1(r64,r65,r66,boton64,boton65,boton66));
boton65.addEventListener("click",() =>radio2(r64,r65,r66,boton64,boton65,boton66));
boton66.addEventListener("click",() =>radio3(r64,r65,r66,boton64,boton65,boton66));




//radio23

let r67 = document.querySelector("#radio1_23");

let r68= document.querySelector("#radio2_23");

let r69 = document.querySelector("#radio3_23");      

const boton67 = document.getElementById("67radio"),boton68=document.getElementById("68radio"),boton69 = document.getElementById("69radio");


boton67.addEventListener("click",() =>radio1(r67,r68,r69,boton67,boton68,boton69));
boton68.addEventListener("click",() =>radio2(r67,r68,r69,boton67,boton68,boton69));
boton69.addEventListener("click",() =>radio3(r67,r68,r69,boton67,boton68,boton69));




//radio24

let r70 = document.querySelector("#radio1_24");

let r71= document.querySelector("#radio2_24");

let r72 = document.querySelector("#radio3_24");      

const boton70 = document.getElementById("70radio"),boton71=document.getElementById("71radio"),boton72 = document.getElementById("72radio");


boton70.addEventListener("click",() =>radio1(r70,r71,r72,boton70,boton71,boton72));
boton71.addEventListener("click",() =>radio2(r70,r71,r72,boton70,boton71,boton72));
boton72.addEventListener("click",() =>radio3(r70,r71,r72,boton70,boton71,boton72));



//radio25

let r73 = document.querySelector("#radio1_25");

let r74= document.querySelector("#radio2_25");

let r75 = document.querySelector("#radio3_25");      

const boton73 = document.getElementById("73radio"),boton74=document.getElementById("74radio"),boton75 = document.getElementById("75radio");


boton73.addEventListener("click",() =>radio1(r73,r74,r75,boton73,boton74,boton75));
boton74.addEventListener("click",() =>radio2(r73,r74,r75,boton73,boton74,boton75));
boton75.addEventListener("click",() =>radio3(r73,r74,r75,boton73,boton74,boton75));





boton1.style.backgroundColor="#fff";
boton4.style.backgroundColor="#fff";
boton7.style.backgroundColor="#fff";
boton10.style.backgroundColor="#fff";
boton13.style.backgroundColor="#fff";
boton16.style.backgroundColor="#fff";
boton19.style.backgroundColor="#fff";
boton22.style.backgroundColor="#fff";
boton25.style.backgroundColor="#fff";
boton28.style.backgroundColor="#fff";
boton31.style.backgroundColor="#fff";
boton34.style.backgroundColor="#fff";
boton37.style.backgroundColor="#fff";
boton40.style.backgroundColor="#fff";
boton43.style.backgroundColor="#fff";
boton46.style.backgroundColor="#fff";
boton49.style.backgroundColor="#fff";
boton52.style.backgroundColor="#fff";
boton55.style.backgroundColor="#fff";
boton58.style.backgroundColor="#fff";
boton61.style.backgroundColor="#fff";
boton64.style.backgroundColor="#fff";
boton67.style.backgroundColor="#fff";
boton70.style.backgroundColor="#fff";
boton73.style.backgroundColor="#fff";