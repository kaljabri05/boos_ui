<?php 

ob_start();
$API_KEY = "574346945:AAF7eieTh_53lDaD6EUSVNlV79PScNe8YXU"; 

define('API_KEY',$API_KEY);
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text; 
$admin = 415699182;
$data = $update->callback_query->data;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;

$name = $message->from->first_name;
$username = $message->from->username;

$u = explode("\n",file_get_contents("data/memb.txt"));
$c = count($u)-1;
if ($update && !in_array($chat_id, $u)) {
    file_put_contents("data/memb.txt", $chat_id."\n",FILE_APPEND);
  }
  if ($text == '/mem' and $chat_id == 415699182) {
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"مستخدمين البوت 🤖 الخاص بك :- $c"
    ]);
  }

$id = $message->from->id;
$abood = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@iQuran1_bot&user_id=$id");
if($text == "/start" and strpos($abood, '"status":"left"') == TRUE){
mkdir("data");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"عذراََ !⚠️
يجب الاشتراك في قناة البوت .📡 اولاََ ",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"اضغط هنا للأشتراك", 'url'=>"https://telegram.me/samboot_robot"]]    
]    
])
]);
}
$wel = file_get_contents("data/start.txt");
if ($text == "/start" or $text == "↪ العودة للقائمة" and strpos($abood, '"status":"left"') != TRUE){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"
اهلا بك في بوت الـقران الكريم كامل لشيخ عبد الرحمن السديس

___________________
لعرض ســـور الـــقــران الكريم كامل اظغط على 
قائمة (سور القران الکریم) 🔰
ــــــــــــــــــــ
لعرض معلومات البوت اضغط على (معلومات عن البوت)

_____________________
يا أيها الذين آمنوا هل أدلكم على تجارة تنجيكم من عذاب اليم 
___________
❀ اللهُم صلِ على محمد وآل محمد ❀
___________
لا تنس ذكر الله :- @khaledal_Rashed ❀",
'reply_markup'=>json_encode([
			'keyboard'=>[
				[['text'=>'سور القران الكريم'],['text'=>'معلومات عن البوت']],
			]
		]),'resize_keyboard'=>true
	]);
}
//

if($text == "سور القران الكريم" or $text == " سور القران الكريم "){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" ســـــور الـــقــران الكريم كـــامـــل
لشيخ عبد الرحمن السديس
",

'reply_markup'=>json_encode([
			'keyboard'=>[
				[['text'=>'سورة الفاتحة']],
				[['text'=>'سورة البقرة'],['text'=>'سورة آل عمران'],['text'=>'سورة النساء']],
				[['text'=>'سورة المائدة'],['text'=>'سورة الانعام'],['text'=>'سورة الاعراف']],
				[['text'=>'سورة الانفال'],['text'=>'سورة التوبة'],['text'=>'سورة يونس']],
				[['text'=>'سورة هود'],['text'=>'سورة يوسف'],['text'=>'سورة الرعد']],
				[['text'=>'سورة ابراهيم'],['text'=>'سورة الحجر'],['text'=>'سورة النحل']],
				[['text'=>'سورة الاسراء'],['text'=>'سورة الكهف'],['text'=>'سورة مريم']],
				[['text'=>'سورة طه'],['text'=>'سورة الانبياء'],['text'=>'سورة الحج']],
				[['text'=>'سورة المؤمنون'],['text'=>'سورة النور'],['text'=>'سورة الفرقان']],
				[['text'=>'سورة الشعراء'],['text'=>'سورة النمل'],['text'=>'سورة القصص']],
				[['text'=>'سورة العنكبوت'],['text'=>'سورة الروم'],['text'=>'سورة لقمان']],
				[['text'=>'سورة السجدة'],['text'=>'سورة الاحزاب'],['text'=>'سورة سبأ']],
				[['text'=>'سورة فاطر'],['text'=>'سورة يس'],['text'=>'سورة الصافات']],
				[['text'=>'سورة ص'],['text'=>'سورة الزمر'],['text'=>'سورة غافر']],
				[['text'=>'سورة فصلت'],['text'=>'سورة الشورى'],['text'=>'سورة الزخرف']],
				[['text'=>'سورة الدخان'],['text'=>'سورة الجاثية'],['text'=>'سورة الاحقاف']],
				[['text'=>'سورة محمد'],['text'=>'سورة الفتح'],['text'=>'سورة الحجرات']],
				[['text'=>'سورة ق'],['text'=>'سورة الذاريات'],['text'=>'سورة الطور']],
				[['text'=>'سورة النجم'],['text'=>'سورة القمر'],['text'=>'سورة الرحمن']],
				[['text'=>'سورة الواقعة'],['text'=>'سورة الحديد'],['text'=>'سورة المجادلة']],
				[['text'=>'سورة الحشر'],['text'=>'سورة الممتحنة'],['text'=>'سورة الصف']],
				[['text'=>'سورة الجمعة'],['text'=>'سورة المنافقون'],['text'=>'سورة التغابن']],
				[['text'=>'سورة الطلاق'],['text'=>'سورة التحريم'],['text'=>'سورة الملك']],
				[['text'=>'سورة القلم'],['text'=>'سورة الحاقة'],['text'=>'سورة المعارج']],
				[['text'=>'سورة نوح'],['text'=>'سورة الجن'],['text'=>'سورة المزمل']],
				[['text'=>'سورة المدثر'],['text'=>'سورة القيامة'],['text'=>'سورة الانسان']],
				[['text'=>'سورة المرسلات'],['text'=>'سورة النبأ'],['text'=>'سورة النازعات']],
				[['text'=>'سورة عبس'],['text'=>'سورة التكوير'],['text'=>'سورة الانفطار']],
				[['text'=>'سورة المطففين'],['text'=>'سورة الانشقاق'],['text'=>'سورة البروج']],
				[['text'=>'سورة الطارق'],['text'=>'سورة الاعلى'],['text'=>'سورة الغاشية']],
				[['text'=>'سورة الفجر'],['text'=>'سورة سورة البلد'],['text'=>'سورة الشمس']],
				[['text'=>'سورة الليل'],['text'=>'سورة الضحى'],['text'=>'سورة الشرح']],
				[['text'=>'سورة التين'],['text'=>'سورة العلق'],['text'=>'سورة القدر']],
				[['text'=>'سورة البينة'],['text'=>'سورة الزلزلة'],['text'=>'سورة العاديات']],
				[['text'=>'سورة القارعة'],['text'=>'سورة التكاثر'],['text'=>'سورة العصر']],
				[['text'=>'سورة الهمزة'],['text'=>'سورة الفيل'],['text'=>'سورة قريش']],
				[['text'=>'سورة الماعون'],['text'=>'سورة الكوثر'],['text'=>'سورة الكافرون']],
				[['text'=>'سورة النصر'],['text'=>'سورة المسد'],['text'=>'سورة الاخلاص']],
[['text'=>'سورة الفلق'],['text'=>'سورة الناس']],
				[['text'=>'اذكار الصباح والمساء'],['text'=>'تطبيق القران الكريم']],
[['text'=>'↪ العودة للقائمة']],
			]
		]),
'resize_keyboard'=>true
	]);
}
if($text == "سورة الفاتحة" or $text == "سورة الفاتحة"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/2",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة البقرة" or $text == "سوره البقرة"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة آل عمران" or $text == "سوره آل عمران"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/4",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة النساء" or $text == "سورة النساء"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/5",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة المائدة" or $text == "سوره المائده"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/6",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الانعام" or $text == "سورة الأنعام"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/7",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الاعراف" or $text == "سوره الاعراف"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/8",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الانفال" or $text == "سوره الانفال"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/9",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة التوبة" or $text == "سوره التوبة"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/10",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره يونس" or $text == "سورة يونس"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/11",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره هود" or $text == "سورة هود"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/12",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة يوسف" or $text == "سوره يوسف"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/13",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الرعد" or $text == "سوره الرعد"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/14",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة ابراهيم" or $text == "سوره ابراهيم"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/15",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الحجر" or $text == "سورة الحجر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/16",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره النحل" or $text == "سورة النحل"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/17",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الاسراء" or $text == "سوره الاسراء"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/18",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الكهف" or $text == "سورة الكهف"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/19",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة مريم" or $text == "سوره مريم"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/20",
 reply_to_message_id =>$message->message_id, 
]);
}if($text == "سورة طه" or $text == "سوره طه"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/21",
 reply_to_message_id =>$message->message_id, 
]);
}if($text == "سوره الانبياء" or $text == "سورة الانبياء"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/22",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الحج" or $text == "سورة الحج"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/23",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة المؤمنون" or $text == "سوره المؤمنون"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/24",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة النور" or $text == "سوره النور"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/25",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الفرقان" or $text == "سورة الفرقان"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/26",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الشعراء" or $text == "سوره الشعراء"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/27",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة النمل" or $text == "سوره النمل"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/28",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره القصص" or $text == "سورة القصص"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/29",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره العنكبوت" or $text == "سورة العنكبوت"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/30",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الروم" or $text == "سوره الروم"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/31",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة لقمان" or $text == "سوره لقمان"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/32",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة السجدة" or $text == "سوره السجده"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/33",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الاحزاب" or $text == "سوره الاحزاب"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/34",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة سبأ" or $text == "سوره سبأ"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/35",
 reply_to_message_id =>$message->message_id, 

]);
}
if($text == "سوره فاطر" or $text == "سورة فاطر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/36",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره يس" or $text == "سورة يس"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/37",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الصافات" or $text == "سوره الصافات"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/38",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة ص" or $text == "سوره ص"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/39",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الزمر" or $text == "سورة الزمر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/40",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة غافر" or $text == "سوره غافر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/41",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة فصلت" or $text == "سوره فصلت"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/42",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الشورى" or $text == "سوره الشورئ"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/43",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الزخرف" or $text == "سوره الزخرف"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/44",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الدخان" or $text == "سوره الدخان"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/45",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الجاثية" or $text == "سوره الجاثيه"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/46",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الاحقاف" or $text == "سوره الاحقاف"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/47",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة محمد" or $text == "سوره محمد"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/48",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الفتح" or $text == "سوره الفتح"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/49",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الحجرات" or $text == "سورة الحجرات"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/50",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة ق" or $text == "سوره ق"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/51",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الذاريات" or $text == "سوره الذاريات"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/52",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الطور" or $text == "سوره الطور"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/53",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة النجم" or $text == "سوره النجم"){
bot( sendaudio ,[
 chat_id =>$chat_id, 

 audio =>"https://t.me/Qran00/54",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة القمر" or $text == "سوره القمر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/55",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الرحمن" or $text == "سوره الرحمن"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/56",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الواقعة" or $text == "سوره الواقعة"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/57",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الحديد" or $text == "سوره الحديد"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/58",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره المجادلة" or $text == "سورة المجادلة"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/59",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الحشر" or $text == "سوره الحشر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/60",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الممتحنة" or $text == "سوره الممتحنة"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/61",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سوره الصف" or $text == "سورة الصف"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/62",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورة الجمعة" or $text == "سوره الجمعة"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/63",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورة المنافقون" or $text == "سوره المنافقون"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/64",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورة التغابن" or $text == "سوره التغابن"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/65",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورة الطلاق" or $text == "سوره الطلاق"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/66",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورة التحريم" or $text == "سوره التحريم"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/67",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سوره الملك" or $text == "سورة الملك"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/68",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورة القلم" or $text == "سوره القلم"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/69",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورة الحاقة" or $text == "سوره الحاقة"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/70",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورة المعارج" or $text == "سوره المعارج"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/71",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورة نوح" or $text == "سوره نوح"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/72",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورة الجن" or $text == "سوره الجن"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/73",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورة المزمل" or $text == "سوره المزمل"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/74",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورة المدثر" or $text == "سوره المدثر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/75",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورة القيامة" or $text == "سوره القيامة"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/76",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورة الانسان" or $text == "سوره الانسان"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/77",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورة المرسلات" or $text == "سوره المرسلات"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/78",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره النبأ" or $text == "سوره النبا"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/96",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة النازعات" or $text == "سوره النازعات"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/97",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة عبس" or $text == "سورة عبس"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/98",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره التكوير" or $text == "سورة التكوير"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/99",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الانفطار" or $text == "سورة الانفطار"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/100",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة المطففين" or $text == "سورة المطففين"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/101",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الانشقاق" or $text == "سورة الانشقاق"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/102",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره البروج" or $text == "سورة البروج"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/103",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الطارق" or $text == "سوره الطارق"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/104",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الاعلى" or $text == "سوره الاعلى"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/105",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الغاشية" or $text == "سوره الغاشية"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/106",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الفجر" or $text == "سورة الفجر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/107",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة البلد" or $text == "سوره البلد"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/108",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الشمس" or $text == "سوره الشمس"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/109",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الليل" or $text == "سوره الليل"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/110",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الضحى" or $text == "سوره الضحى"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/111",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الشرح" or $text == "سوره الشرح"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/112",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره التين" or $text == "سورة التين"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/113",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره العلق" or $text == "سورة العلق"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/114",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره القدر" or $text == "سورة القدر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/115",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة البينة" or $text == "سوره البينة"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/116",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الزلزلة" or $text == "سورة الزلزلة"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/117",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره العاديات" or $text == "سورة العديات"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/118",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره القارعة" or $text == "سورة القارعة"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/119",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره التكاثر" or $text == "سورة التكاثر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/120",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة العصر" or $text == "سوره العصر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/121",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الهمزة" or $text == "سوره الهمزة"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/122",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الفيل" or $text == "سوره الفيل"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/123",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة قريش" or $text == "سوره قريش"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/124",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الماعون" or $text == "سوره الماعون"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/125",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الكوثر" or $text == "سوره الكوثر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/126",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الكافرون" or $text == "سورة الكافرون"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/127",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة النصر" or $text == "سوره النصر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/128",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة المسد" or $text == "سوره المسد"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/129",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الاخلاص" or $text == "سوره الاخلاص"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/130",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الفلق" or $text == "سوره الفلق"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/131",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الناس" or $text == "سورة الناس"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/132",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "تطبيق القران الكريم" or $text == "تطبيق القران"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/269",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "اذكار الصباح والمساء" or $text == "اذكار الصباح والمساء"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"أذكار الصباح والمساء 👇
ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
بسم الله الرحمن الرحيم 
 اللَّهُ لَا إِلَهَ إِلَّا هُوَ الْحَيُّ الْقَيُّومُ لَا تَأْخُذُهُ سِنَةٌ وَلَا نَوْمٌ لَهُ مَا فِي السَّمَوَاتِ وَمَا فِي الْأَرْضِ مَنْ ذَا الَّذِي يَشْفَعُ عِنْدَهُ إِلَّا بِإِذْنِهِ يَعْلَمُ مَا بَيْنَ أَيْدِيهِمْ وَمَا خَلْفَهُمْ وَلَا يُحِيطُونَ بِشَيْءٍ مِنْ عِلْمِهِ إِلَّا بِمَا شَاءَ وَسِعَ كُرْسِيُّهُ السَّمَاوَاتِ وَالْأَرْضَ وَلَا يَئُودُهُ حِفْظُهُمَا وَهُوَ الْعَلِيُّ الْعَظِيمُ
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
بسم الله الرحمن الرحيم 
 قُلْ هُوَ اللَّهُ أَحَدٌ (1) اللَّهُ الصَّمَدُ (2) لَمْ يَلِدْ وَلَمْ يُولَدْ (3) وَلَمْ يَكُنْ لَهُ كُفُوًا أَحَدٌ (4)
3مرات
ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
بسم الله الرحمن الرحيم 
 قُلْ أَعُوذُ بِرَبِّ الْفَلَقِ (1) مِنْ شَرِّ مَا خَلَقَ (2) وَمِنْ شَرِّ غَاسِقٍ إِذَا وَقَبَ (3) وَمِنْ شَرِّ النَّفَّاثَاتِ فِي الْعُقَدِ (4) وَمِنْ شَرِّ حَاسِدٍ إِذَا حَسَدَ (5)
3مرات
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
بسم الله الرحمن الرحيم 
 قُلْ أَعُوذُ بِرَبِّ النَّاسِ (1) مَلِكِ النَّاسِ (2) إِلَهِ النَّاسِ (3) مِنْ شَرِّ الْوَسْوَاسِ الْخَنَّاسِ (4) الَّذِي يُوَسْوِسُ فِي صُدُورِ النَّاسِ (5) مِنَ الْجِنَّةِ وَالنَّاسِ (6)
3مرات
ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
اللّهـمَّ أَنْتَ رَبِّـي لا إلهَ إلاّ أَنْتَ ، خَلَقْتَنـي وَأَنا عَبْـدُك ، وَأَنا عَلـى عَهْـدِكَ وَوَعْـدِكَ ما اسْتَـطَعْـت ، أَعـوذُبِكَ مِنْ شَـرِّ ما صَنَـعْت ، أَبـوءُ لَـكَ بِنِعْـمَتِـكَ عَلَـيَّ وَأَبـوءُ بِذَنْـبي فَاغْفـِرْ لي فَإِنَّـهُ لا يَغْـفِرُ الذُّنـوبَ إِلاّ أَنْتَ .-------↯
من قالها من النهار موقنا بها. فمات من يومه قبل ان يمسي . فهو من اهل الجنة .وكذلك من قالها في المساء
ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
اللّهُـمَّ إِنِّـي أسْـأَلُـكَ العَـفْوَ وَالعـافِـيةَ في الدُّنْـيا وَالآخِـرَة ، اللّهُـمَّ إِنِّـي أسْـأَلُـكَ العَـفْوَ وَالعـافِـيةَ في ديني وَدُنْـيايَ وَأهْـلي وَمالـي ، اللّهُـمَّ اسْتُـرْ عـوْراتي وَآمِـنْ رَوْعاتـي ، اللّهُـمَّ احْفَظْـني مِن بَـينِ يَدَيَّ وَمِن خَلْفـي وَعَن يَمـيني وَعَن شِمـالي ، وَمِن فَوْقـي ، وَأَعـوذُ بِعَظَمَـتِكَ أَن أُغْـتالَ مِن تَحْتـي .-----↯
ويقال عند النوم ايضا.
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
أَصْـبَحْنا وَأَصْـبَحَ المُـلْكُ لله وَالحَمدُ لله ، لا إلهَ إلاّ اللّهُ وَحدَهُ لا شَريكَ لهُ، لهُ المُـلكُ ولهُ الحَمْـد، وهُوَ على كلّ شَيءٍ قدير ، رَبِّ أسْـأَلُـكَ خَـيرَ ما في هـذا اليوم وَخَـيرَ ما بَعْـدَه ، وَأَعـوذُ بِكَ مِنْ شَـرِّ ما في هـذا اليوم وَشَرِّ ما بَعْـدَه، رَبِّ أَعـوذُبِكَ مِنَ الْكَسَـلِ وَسـوءِ الْكِـبَر ، رَبِّ أَعـوذُبِكَ مِنْ عَـذابٍ في النّـارِ وَعَـذابٍ في القَـبْر.
ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
أَمْسَيْـنا وَأَمْسـى المـلكُ لله وَالحَمدُ لله ، لا إلهَ إلاّ اللّهُ وَحدَهُ لا شَريكَ لهُ، لهُ المُـلكُ ولهُ الحَمْـد، وهُوَ على كلّ شَيءٍ قدير ، رَبِّ أسْـأَلُـكَ خَـيرَ ما في هـذهِ اللَّـيْلَةِ وَخَـيرَ ما بَعْـدَهـا ، وَأَعـوذُ بِكَ مِنْ شَـرِّ ما في هـذهِ اللَّـيْلةِ وَشَرِّ ما بَعْـدَهـا ، رَبِّ أَعـوذُبِكَ مِنَ الْكَسَـلِ وَسـوءِ الْكِـبَر ، رَبِّ أَعـوذُ بِكَ مِنْ عَـذابٍ في النّـارِ وَعَـذابٍ في القَـبْر.
ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
بِسـمِ اللهِ الذي لا يَضُـرُّ مَعَ اسمِـهِ شَيءٌ في الأرْضِ وَلا في السّمـاءِ وَهـوَ السّمـيعُ العَلـيم ----↯
3مرات
ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
أَعـوذُبِكَلِمـاتِ اللّهِ التّـامّـاتِ مِنْ شَـرِّ ما خَلَـق .----↯
3مرات
ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ",
]);}
if($text == "معلومات عن البوت" or $text == "معلومات عن البوت"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
البوت صدقة جارية ان شاء الله
____________________
 الدال على الخير كفاعلة ❀
__________
اصدار البوت ⇊
1.1 ⇇
_________________✓
تم تحديث البوت في تاريخ ⇓
2018/04/16
_____⇊_______
1439/07/29

_______

",
]);
}

// @samannmbot    سام
