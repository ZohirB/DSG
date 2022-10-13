
const years = [FirstYear,SecondYear,ThirdYear,FourthYear,FifthYear];
<<<<<<< HEAD
const fonts = [Font_1,Font_2,Font_3,Font_4,Font_5];
=======
//const fonts = [Font_1,Font_2,Font_3,Font_4,Font_5];
>>>>>>> ea3bdd3567edd67c270e0ba83e2a45b9027b6b27
const designs = [New_design,Old_design];

function DropDown(info,type){
  var data = [];
  if (type == 1) // Years type
    data = years;
  else if (type == 2) // fonts type
    data = fonts;
  else if (type == 3) // designs type
    data = designs;

  for (var i=0 ; i < data.length ; i++){
    if (info == data[i]){
      if (data[i].style.display == "inline") 
        data[i].style.display = "none";
      else 
        data[i].style.display = "inline";
    }
    else {
      data[i].style.display = "none";
    }
  }
}

<<<<<<< HEAD

function toggle(source,start) {
  var checkboxes = document.querySelectorAll('input[type="checkbox"]');
  const cl = [0,7,14,21,28,35,42,50,59,64,72];
  var st = cl[start-1];
  var en = cl[start]-1;
  var co = 0;
  var ed;
  for (var i = 0; i < checkboxes.length; i++) {
      if (checkboxes[i] != source && (checkboxes[i].id<=en && checkboxes[i].id>=st))
          checkboxes[i].checked = source.checked;
  }
}  
count = 0;
//document.getElementById('Count_Uni').textContent = "عدد المواد المحددة (" + count + ") "+ emoji(count) +" ";
document.getElementById('Count_Uni').textContent = "عدد المواد المحددة (" + count + ") ";
function checkboxes_inc(){
  count = 0;
  var inputElems = document.getElementsByTagName("input");
  for (var i = 0; i < 85; i++) {
    if (inputElems[i].checked == true && inputElems[i].id < 75)
=======
function toggle(source,year,sem) {
  var checkboxes = document.querySelectorAll('input[type="checkbox"]');
  for (var i = 0; i < checkboxes.length; i++) {
    var valYear = checkboxes[i].getAttribute("d_year");
    var valSem = checkboxes[i].getAttribute("d_sem");
      if (checkboxes[i] != source && (valYear == year && valSem == sem))
          checkboxes[i].checked = source.checked;
  }
}

count = 0;
//document.getElementById('Count_Uni').textContent = "عدد المواد المحددة (" + count + ") "+ emoji(count) +" ";
document.getElementById('Count_Uni').textContent = "عدد المواد المحددة (" + count + ") ";

function checkboxes_inc(){
  count = 0;
  var inputElems = document.querySelectorAll('input[type="checkbox"]');
  for (var i = 0; i < inputElems.length; i++) {
    if (inputElems[i].checked == true && inputElems[i].value != 555)
>>>>>>> ea3bdd3567edd67c270e0ba83e2a45b9027b6b27
      count++;
  }
  document.getElementById('Count_Uni').textContent = "عدد المواد المحددة (" + count + ") "+ emoji(count) +" ";
}


function emoji(count){
  var emo = ['🙄','😅','😎','😬','😧','😨','😱','🤯'];
  if (count == 0)
    return emo[0];
  else if (count > 0 && count < 7)
    return emo[1];
  else if (count == 7)
    return emo[2];
  else if (count > 7 && count <= 9)
    return emo[3];
  else if (count >= 10 && count <= 11)
    return emo[4];
  else if (count >= 12 && count <= 14)
    return emo[5];
  else if (count >= 15 && count <= 18)
    return emo[6];
  else 
    return emo[7];
}

function mot_text(radio_val){
  if (radio_val == 1){
    tb.style.display = "none";
  }
  else if (radio_val == 2){
    tb.style.display = "inline";
  }
}

<<<<<<< HEAD
function generateRandomNumber(maxLimit){
  let rand = Math.random() * maxLimit;
  rand = Math.floor(rand);
  return rand;
}
=======
>>>>>>> ea3bdd3567edd67c270e0ba83e2a45b9027b6b27

var str = [];
str[0]="إذا أردت أن تتغلب على الهزيمة فعليك بالانتصار";
str[1]="أنار الله درب كل مجتهد، وفقكم لكل ما فيه الخير لكم، ولكل شيء تحبونه";
str[2]="إن التركيز هو الأساس لكي تنجح في أي شيء في حياتك";
str[3]="عندما لا تجد الطريق المؤدي إلى النجاح سيكون عليك أن تبتكره";
str[4]="ادرس الآن لكي لا تندم في المستقبل";
str[5]="اضغط على نفسك، واعمل بجد، لأنه لا يوجد شخص آخر سيفعل ذلك من أجلك";
str[6]="لا تنتظر الفرصة للدراسة، بل اخلقها لنفسك";
str[7]="لا تتوقف عندما تتعب، توقف فقط عندما تنتهي";
str[8]="سيكون الأمر صعباً، لكن الصعب لا يعني مستحيلًا";
str[9]="أن تحاول أي محاولة جديدة وتتعثر لتتعلم، أفضل من عدم المحاولة نهائياً";
str[10]="تذكر دوماً ما أنت بارع فيه وتمسك به";
<<<<<<< HEAD

function gen_random(){
  var num = generateRandomNumber(10);
  document.getElementById("mot").value = str[num];
}
=======
str[11]="The greater the difficulty, the more the glory in surmounting it";
str[12]="Too tired? Too hard? Too early? Too busy? NO EXCUSES";
str[13]="Quitting... that's for those who have no heart. I DO NOT QUIT";
str[14]="Pain is temporary. Greatness last forever";
str[15]="Success usually comes to those who are too busy looking for it";
str[16]="It is never too late to be what you want to be";
str[17]="Success is the result of preparation, hard work, and learning from failure";
str[18]="All our dreams can come true, if we have the courage to pursue them";
mot_num = 0;

function generateRandomNumber(){
  maxLimit = str.length;
  let rand = Math.random() * maxLimit;
  rand = Math.floor(rand);
  return rand;
}

function gen_random(){
  var num = generateRandomNumber();
  mot_num = num;
  document.getElementById("mot").value = str[num];
}

function next_mot (){
  ++mot_num;
  if (mot_num >= str.length)
    mot_num = 0; 
  document.getElementById("mot").value = str[mot_num];
}
function last_mot(){
  --mot_num;
  if (mot_num < 0)
    mot_num = str.length - 1; 
  document.getElementById("mot").value = str[mot_num];
}
>>>>>>> ea3bdd3567edd67c270e0ba83e2a45b9027b6b27
