<?php
ob_start();
define('API_KEY','1339306908:AAG_jZZlW0nqGDt9mkDrchlJ0hzgG72UqQA');
// @phpuz va @bots_uz ga a'zo bo'ling
$admin = "1171894731";

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
$edname = $editm ->from->first_name;
$message = $update->message;
$mesid = $message->message_id;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$mtext = $message->text;
$forward = $update->message->forward_from;
$editm = $update->edited_message;
$fadmin = $message->from->id;
$step=file_get_contents("data/$fadmin/name.txt");
$update = json_decode(file_get_contents('php://input'));
$ufname = $efede['message']['from']['first_name'];
$uname = $efede['message']['from']['last_name'];

$channel = $update->channel_post;
$channel_text = $channel->text;
$channel_mid = $channel->message_id;
$channel_id = $channel->chat->id;
$channel_user = $channel->chat->username;
$chanel_doc = $channel->document;
$chanel_video = $channel->video;
$channel_audio = $channel->audio;
$channel_audioTitle = $channel_audio->title;
$message_ch = $update->channel_post;
$message_ch_photo = $message_ch->photo;
$channel_id = $channel->chat->id;
$channel_poto = $channel->photo;

$update = json_decode(file_get_contents('php://input'));
$edname = $editm ->from->first_name;
$message = $update->message;
$mesid = $message->message_id;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$mtext = $message->text;
$forward = $update->message->forward_from;
$editm = $update->edited_message;
$fadmin = $message->from->id;
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$message = $update->message;
$id = $message->from->id;
$bot = '@'.bot('getme',['bot'])->result->username;
$data     = $update->callback_query->data;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;$bot = '@'.bot('getme',['bot'])->result->username;

$data = $update->callback_query->data;
$in_id = $update->callback_query->inline_message_id;
$id = $update->callback_query->from->id;
$inlineqt = $update->inline_query->query;
$msgs = json_decode(file_get_contents('msgs.json'),true);
$temp = json_decode(file_get_contents('temp.json'),true);
$step=file_get_contents("data/$fadmin/name.txt");
//bot tarjima qiluvchi @php_kodlar_akramjonov
$temp = json_decode(file_get_contents('temp.json'),true);
$msg = json_decode(file_get_contents('msgs.json'),true);
$temp1 = json_decode(file_get_contents('temp1.json'),true);
$msg1 = json_decode(file_get_contents('msgs1.json'),true);
if ($message->photo or $message->document or $message->video or $message->voice or $message->audio) {
    $text = $message->caption;
}
if ($text == '/us') {
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>count($temp)
        ]);
}

if (!file_exists('temp.json')) {
    file_put_contents("temp.json", '{}');
}if (!file_exists('msgs.json')) {
    file_put_contents("msgs.json", '{"last":1}');
}

// start
if(stripos($mtext,"/start") !== false){
$text = "Salom✋ 
Mening xizmatim kanalga meni admin qilsayiz kanalizga biror rasm yoki dokument vahokazo tashasayiz pastida do'stlarga ulashish tugmasi qoyib beraman!
👨‍🎓Admin: @Shox_Xacker
📢Kanal: @Hacker_Bey
⚒Bot: @Like_V_Bot

🛠Yaratuvchilar: @Shox_Xacker";
  $a=json_encode(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$text,
   'reply_markup'=>json_encode([
   'inline_keyboard'=>[ 
       [['text'=>'📝 Yangi Post Yasash','callback_data'=>'cr']],
          [['text'=>'🎩 Admin','url'=>'https://telegram.me/Shox_Xacker'],]
]
    ])
    ]));

}

if ($data == 'cr') {
    $temp[$chat_id2]['mode'] = 'head';
    bot('editMessageText',[
        'chat_id'=>$chat_id2,
        'message_id'=>$message_id,
        'text'=>"📝 Sarlavhani Yuboring,
🖌 Sarlavha - Matnli xabar, Rasm, Video, Audio, Fayl bo'lishi mumkin."
        ]);
         file_put_contents('temp.json', json_encode($temp));
}
if ($temp[$chat_id]['mode'] == 'head') {
    if ($message->text) {
        $temp[$chat_id]['type'] = 'text';
        $temp[$chat_id]['text'] = $text;
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"- Saqlandi, shaffof tugmalar qo'shishni xohlaysizmi?",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                [['text'=>"Ha",'callback_data'=>'yes'],['text'=>"Yo'q",'callback_data'=>"no"]]
                ]
                ])
            ]);
        $temp[$chat_id]['mode'] = null;
    file_put_contents('temp.json', json_encode($temp));
    }
    if ($message->photo) {
        $temp[$chat_id]['type'] = 'photo';
        $temp[$chat_id]['caption'] = $text;
        $temp[$chat_id]['file_id'] = $message->photo[0]->file_id;
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"- Saqlandi, shaffof tugmalar qo'shishni xohlaysizmi?",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                [['text'=>"Ha",'callback_data'=>'yes'],['text'=>"Yo'q",'callback_data'=>"no"]]
                ]
                ])
            ]);
        $temp[$chat_id]['mode'] = null;
    file_put_contents('temp.json', json_encode($temp));    
    }
    if ($message->video) {
        $temp[$chat_id]['type'] = 'video';
        $temp[$chat_id]['caption'] = $text;
        $temp[$chat_id]['file_id'] = $message->video->file_id;
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"- Saqlandi, shaffof tugmalar qo'shishni xohlaysizmi?",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                [['text'=>"Ha",'callback_data'=>'yes'],['text'=>"Yo'q",'callback_data'=>"no"]]
                ]
                ])
            ]);
        $temp[$chat_id]['mode'] = null;
    file_put_contents('temp.json', json_encode($temp));    
    }
    if ($message->voice) {
        $temp[$chat_id]['type'] = 'voice';
        $temp[$chat_id]['caption'] = $text;
        $temp[$chat_id]['file_id'] = $message->voice->file_id;
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"- Saqlandi, shaffof tugmalar qo'shishni xohlaysizmi?",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                [['text'=>"Ha",'callback_data'=>'yes'],['text'=>"Yo'q",'callback_data'=>"no"]]
                ]
                ])
            ]);
        $temp[$chat_id]['mode'] = null;
    file_put_contents('temp.json', json_encode($temp));    
    }
    if ($message->audio) {
        $temp[$chat_id]['type'] = 'audio';
        $temp[$chat_id]['caption'] = $text;
        $temp[$chat_id]['file_id'] = $message->audio->file_id;
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"- Saqlandi, shaffof tugmalar qo'shishni xohlaysizmi?",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                [['text'=>"Ha",'callback_data'=>'yes'],['text'=>"Yo'q",'callback_data'=>"no"]]
                ]
                ])
            ]);
        $temp[$chat_id]['mode'] = null;
    file_put_contents('temp.json', json_encode($temp));    
    }
     if ($message->sticker) {
        $temp[$chat_id]['type'] = 'sticker';
        $temp[$chat_id]['caption'] = $text;
        $temp[$chat_id]['file_id'] = $message->sticker->file_id;
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"- Saqlandi, shaffof tugmalar qo'shishni xohlaysizmi?",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                [['text'=>"Ha",'callback_data'=>'yes'],['text'=>"Yo'q",'callback_data'=>"no"]]
                ]
                ])
            ]);
        $temp[$chat_id]['mode'] = null;
    file_put_contents('temp.json', json_encode($temp));    
    }
    if ($message->document) {
        $temp[$chat_id]['type'] = 'doc';
        $temp[$chat_id]['caption'] = $text;
        $temp[$chat_id]['file_id'] = $message->document->file_id;
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"- Saqlandi, shaffof tugmalar qo'shishni xohlaysizmi?",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                [['text'=>"Ha",'callback_data'=>'yes'],['text'=>"Yo'q",'callback_data'=>"no"]]
                ]
                ])
            ]);
        $temp[$chat_id]['mode'] = null;
    file_put_contents('temp.json', json_encode($temp));    
    }
}


if ($data == 'no') {
    bot('editMessageText',[
        'chat_id'=>$chat_id2,
        'message_id'=>$message_id,
        'text'=>'Bir oz kutib turing.'
        ]);
    if ($temp[$chat_id2]['type'] == 'text') {
        $msg[$msg['last'] + 1]['type'] = 'text';
        $msg[$msg['last'] + 1]['text'] = $temp[$chat_id2]['text'];
        bot('sendMessage',[
            'chat_id'=>$chat_id2,
            'text'=>$temp[$chat_id2]['text'],
            'parse_mode'=>'html'
            ]);
        $msg['last'] = $msg['last'] + 1;
        bot('sendMessage',[
            'chat_id'=>$chat_id2,
            'text'=>$bot.' '.$msg['last'],
            'parse_mode'=>'markdown',
            'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [['text'=>'📝 Yangi Post Yasash','callback_data'=>'cr']]]])
            ]);
    }
    if ($temp[$chat_id2]['type'] == 'photo') {
        $msg[$msg['last'] + 1]['type'] = 'photo';
        $msg[$msg['last'] + 1]['file_id'] = $temp[$chat_id2]['file_id'];
        $msg[$msg['last'] + 1]['caption'] = $temp[$chat_id2]['caption'];
        bot('sendPhoto',[
            'chat_id'=>$chat_id2,
            'file_id'=>$temp[$chat_id2]['file_id'],
            'caption'=>$temp[$chat_id2]['caption'],
            'parse_mode'=>'html'
            ]);
        $msg['last'] = $msg['last'] + 1;
        bot('sendMessage',[
            'chat_id'=>$chat_id2,
            'text'=>$bot.' '.$msg['last'],
            'parse_mode'=>'markdown',
            'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [['text'=>'📝 Yangi Post Yasash','callback_data'=>'cr']]]])
            ]);
    }
    if ($temp[$chat_id2]['type'] == 'video') {
        $msg[$msg['last'] + 1]['type'] = 'video';
        $msg[$msg['last'] + 1]['file_id'] = $temp[$chat_id2]['file_id'];
        $msg[$msg['last'] + 1]['caption'] = $temp[$chat_id2]['caption'];
        bot('sendvideo',[
            'chat_id'=>$chat_id2,
            'file_id'=>$temp[$chat_id2]['file_id'],
            'caption'=>$temp[$chat_id2]['caption'],
            'parse_mode'=>'html'
            ]);
        $msg['last'] = $msg['last'] + 1;
        bot('sendMessage',[
            'chat_id'=>$chat_id2,
            'text'=>$bot.' '.$msg['last'],
            'parse_mode'=>'markdown',
            'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [['text'=>'📝 Yangi Post Yasash','callback_data'=>'cr']]]])
            ]);
    }
    if ($temp[$chat_id2]['type'] == 'audio') {
        $msg[$msg['last'] + 1]['type'] = 'audio';
        $msg[$msg['last'] + 1]['file_id'] = $temp[$chat_id2]['file_id'];
        $msg[$msg['last'] + 1]['caption'] = $temp[$chat_id2]['caption'];
        bot('sendaudio',[
            'chat_id'=>$chat_id2,
            'file_id'=>$temp[$chat_id2]['file_id'],
            'caption'=>$temp[$chat_id2]['caption'],
            'parse_mode'=>'html'
            ]);
        $msg['last'] = $msg['last'] + 1;
        bot('sendMessage',[
            'chat_id'=>$chat_id2,
            'text'=>$bot.' '.$msg['last'],
            'parse_mode'=>'markdown',
            'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [['text'=>'📝 Yangi Post Yasash','callback_data'=>'cr']]]])
            ]);
    }
    if ($temp[$chat_id2]['type'] == 'voice') {
        $msg[$msg['last'] + 1]['type'] = 'voice';
        $msg[$msg['last'] + 1]['file_id'] = $temp[$chat_id2]['file_id'];
        $msg[$msg['last'] + 1]['caption'] = $temp[$chat_id2]['caption'];
        bot('sendvoice',[
            'chat_id'=>$chat_id2,
            'file_id'=>$temp[$chat_id2]['file_id'],
            'caption'=>$temp[$chat_id2]['caption'],
            'parse_mode'=>'html'
            ]);
        $msg['last'] = $msg['last'] + 1;
        bot('sendMessage',[
            'chat_id'=>$chat_id2,
            'text'=>$bot.' '.$msg['last'],
            'parse_mode'=>'markdown',
            'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [['text'=>'📝 Yangi Post Yasash','callback_data'=>'cr']]]])
            ]);
    }
    if ($temp[$chat_id2]['type'] == 'sticker') {
        $msg[$msg['last'] + 1]['type'] = 'sticker';
        $msg[$msg['last'] + 1]['file_id'] = $temp[$chat_id2]['file_id'];
        $msg[$msg['last'] + 1]['caption'] = $temp[$chat_id2]['caption'];
        bot('sendsticker',[
            'chat_id'=>$chat_id2,
            'file_id'=>$temp[$chat_id2]['file_id'],
            'parse_mode'=>'html'
            ]);
        $msg['last'] = $msg['last'] + 1;
        bot('sendMessage',[
            'chat_id'=>$chat_id2,
            'text'=>$bot.' '.$msg['last'],
            'parse_mode'=>'markdown',
            'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [['text'=>'📝 Yangi Post Yasash','callback_data'=>'cr']]]])
            ]);
    }
    if ($temp[$chat_id2]['type'] == 'doc') {
        $msg[$msg['last'] + 1]['type'] = 'doc';
        $msg[$msg['last'] + 1]['file_id'] = $temp[$chat_id2]['file_id'];
        $msg[$msg['last'] + 1]['caption'] = $temp[$chat_id2]['caption'];
        bot('senddocument',[
            'chat_id'=>$chat_id2,
            'file_id'=>$temp[$chat_id2]['file_id'],
            'parse_mode'=>'html'
            ]);
        $msg['last'] = $msg['last'] + 1;
        bot('sendMessage',[
            'chat_id'=>$chat_id2,
            'text'=>$bot.' '.$msg['last'],
            'parse_mode'=>'markdown',
            'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [['text'=>'📝 Yangi Post Yasash','callback_data'=>'cr']]]])
            ]);
    }
    $temp[$chat_id2]['type'] = null;
    $temp[$chat_id2]['mode'] = null;
    $temp[$chat_id2]['text'] = null;  
    $temp[$chat_id2]['caption'] = null;
    $temp[$chat_id2]['file_id']= null;
    file_put_contents('temp.json', json_encode($temp));
    file_put_contents('msgs.json', json_encode($msg));
}
if ($data == "yes") {
    $temp[$chat_id2]['mode'] = 'keyboard';
    file_put_contents('temp.json', json_encode($temp));
    bot('editMessageText',[
        'chat_id'=>$chat_id2,
        'message_id'=>$message_id,
        'text'=>"• Bu kabi tugmalar ro'yxatini yuboring.

Matn = havola
Matn = havola, matn = havola
Matn = havola, matn = havola, matn = havola

Misol.
matn = t.me
matn = t.me, matn = t.me
matn = t.me, matn = t.me, matn = t.me"
        ]);
}
if ($text != '/start' and $temp[$chat_id]['mode']=='keyboard') {
    $i=0;
    $keyboard = [];
    $keyboard["inline_keyboard"] = [];
    $rows = explode("n",$text);
        foreach($rows as $row){
            $j=0;
            $keyboard["inline_keyboard"][$i]=[];
            $bottons = explode(",",$row);
                foreach($bottons as $botton){
                    $data = explode("=",$botton."=");
                    $Ibotton = ["text" => trim($data[0]), "url" => trim($data[1])];
                    $keyboard["inline_keyboard"][$i][$j] = $Ibotton;
                    $j++;
                }
                $i++;
            }
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>'Bir oz kutib turing.'
        ]);
    $reply_markup=json_encode($keyboard);
    if ($temp[$chat_id]['type'] == 'text') {
        $msg['last'] = $msg['last'] + 1;
        bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$temp[$chat_id]['text'],
        'reply_markup'=>($reply_markup)
        ]);
    bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>$bot.' '.$msg['last'],
            'parse_mode'=>'markdown',
            'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [['text'=>'📝 Yangi Post Yasash','callback_data'=>'cr']]]])
            ]);
    
    $msg[$msg['last']]['text'] = $temp[$chat_id]['text'];
    $msg[$msg['last']]['type'] = 'text_keyboard';
    $msg[$msg['last']]['reply_markup'] = $keyboard;
    }
    if ($temp[$chat_id]['type'] == 'photo') {
        $msg['last'] = $msg['last'] + 1;
        bot('sendPhoto',[
        'chat_id'=>$chat_id,
        'file_id'=>$temp[$chat_id]['file_id'],
        'caption'=>$temp[$chat_id]['caption'],
        'parse_mode'=>'markdown',
        'reply_markup'=>($reply_markup)
        ]);
    bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>$bot.' '.$msg['last'],
            'parse_mode'=>'markdown',
            'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [['text'=>'📝 Yangi Post Yasash','callback_data'=>'cr']]]])
            ]);
    
        $msg[$msg['last']]['file_id'] = $temp[$chat_id]['file_id'];
        $msg[$msg['last']]['caption'] = $temp[$chat_id]['caption'];
    $msg[$msg['last']]['type'] = 'photo_keyboard';
    $msg[$msg['last']]['reply_markup'] = $keyboard;
    }
   
    if ($temp[$chat_id]['type'] == 'voice') {
        $msg['last'] = $msg['last'] + 1;
        bot('sendvoice',[
        'chat_id'=>$chat_id,
        'file_id'=>$temp[$chat_id]['file_id'],
        'caption'=>$temp[$chat_id]['caption'],
        'parse_mode'=>'markdown',
        'reply_markup'=>($reply_markup)
        ]);
    bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>$bot.' '.$msg['last'],
            'parse_mode'=>'markdown',
            'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [['text'=>'📝 Yangi Post Yasash','callback_data'=>'cr']]]])
            ]);
    
        $msg[$msg['last']]['file_id'] = $temp[$chat_id]['file_id'];
        $msg[$msg['last']]['caption'] = $temp[$chat_id]['caption'];
    $msg[$msg['last']]['type'] = 'voice_keyboard';
    $msg[$msg['last']]['reply_markup'] = $keyboard;
    }
    if ($temp[$chat_id]['type'] == 'audio') {
        $msg['last'] = $msg['last'] + 1;
        bot('sendaudio',[
        'chat_id'=>$chat_id,
        'file_id'=>$temp[$chat_id]['file_id'],
        'caption'=>$temp[$chat_id]['caption'],
        'parse_mode'=>'markdown',
        'reply_markup'=>($reply_markup)
        ]);
    bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>$bot.' '.$msg['last'],
            'parse_mode'=>'markdown',
            'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [['text'=>'📝 Yangi Post Yasash','callback_data'=>'cr']]]])
            ]);
    
        $msg[$msg['last']]['file_id'] = $temp[$chat_id]['file_id'];
        $msg[$msg['last']]['caption'] = $temp[$chat_id]['caption'];
    $msg[$msg['last']]['type'] = 'audio_keyboard';
    $msg[$msg['last']]['reply_markup'] = $keyboard;
    }
    if ($temp[$chat_id]['type'] == 'sticker') {
        $msg['last'] = $msg['last'] + 1;
        bot('sendsticker',[
        'chat_id'=>$chat_id,
        'file_id'=>$temp[$chat_id]['file_id'],
        'reply_markup'=>($reply_markup)
        ]);
    bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>$bot.' '.$msg['last'],
            'parse_mode'=>'markdown',
            'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [['text'=>'📝 Yangi Post Yasash','callback_data'=>'cr']]]])
            ]);
    
        $msg[$msg['last']]['file_id'] = $temp[$chat_id]['file_id'];
        $msg[$msg['last']]['caption'] = $temp[$chat_id]['caption'];
    $msg[$msg['last']]['type'] = 'sticker_keyboard';
    $msg[$msg['last']]['reply_markup'] = $keyboard;
    }
    if ($temp[$chat_id]['type'] == 'doc') {
        $msg['last'] = $msg['last'] + 1;
        bot('senddocument',[
        'chat_id'=>$chat_id,
        'file_id'=>$temp[$chat_id]['file_id'],
        'reply_markup'=>($reply_markup)
        ]);
    bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>$bot.' '.$msg['last'],
            'parse_mode'=>'markdown',
            'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [['text'=>'📝 Yangi Post Yasash','callback_data'=>'cr']]]])
            ]);
    
        $msg[$msg['last']]['file_id'] = $temp[$chat_id]['file_id'];
        $msg[$msg['last']]['caption'] = $temp[$chat_id]['caption'];
    $msg[$msg['last']]['type'] = 'doc_keyboard';
    $msg[$msg['last']]['reply_markup'] = $keyboard;
    }
    if ($temp[$chat_id]['type'] == 'video') {
        $msg['last'] = $msg['last'] + 1;
        bot('sendvideo',[
        'chat_id'=>$chat_id,
        'file_id'=>$temp[$chat_id]['file_id'],
        'caption'=>$temp[$chat_id]['caption'],
        'parse_mode'=>'markdown',
        'reply_markup'=>($reply_markup)
        ]);
    bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>$bot.' '.$msg['last'],
            'parse_mode'=>'markdown',
            'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [['text'=>'📝 Yangi Post Yasash','callback_data'=>'cr']]]])
            ]);
    
        $msg[$msg['last']]['file_id'] = $temp[$chat_id]['file_id'];
        $msg[$msg['last']]['caption'] = $temp[$chat_id]['caption'];
    $msg[$msg['last']]['type'] = 'video_keyboard';
    $msg[$msg['last']]['reply_markup'] = $keyboard;
    }
    $temp[$chat_id]['type'] = null;
    $temp[$chat_id]['mode'] = null;
    $temp[$chat_id]['text'] = null;  
    $temp[$chat_id]['caption'] = null;
    $temp[$chat_id]['file_id']= null;
    file_put_contents('temp.json', json_encode($temp));
    file_put_contents("msgs.json", json_encode($msg));
}
$inline = $update->inline_query->query;
if ($inline) {
    $type = $msg[$inline]['type'];
    if ($type == 'text_keyboard') {
        bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'article',
                'id'=>base64_encode(rand(5,555)),
                'title'=>"- Nashrni yuborish uchun bosing,",
             'input_message_content'=>['parse_mode'=>'markdown','message_text'=>$msg[$inline]['text']],
            'reply_markup'=>$msg[$inline]['reply_markup']
          ]])
        ]);
    }
    if ($type == 'text') {
        bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'article',
                'id'=>base64_encode(rand(5,555)),
                'title'=>"- Nashrni yuborish uchun bosing,",
             'input_message_content'=>['parse_mode'=>'markdown','message_text'=>$msg[$inline]['text']],
          ]])
        ]);
    }
    if ($type == 'voice') {
        if($msg[$inline]['caption'] != null){
        bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'voice',
                'id'=>base64_encode(rand(5,555)),
                'title'=>"- Nashrni yuborish uchun bosing,",
                'voice_file_id'=>$msg[$inline]['file_id'],
                'caption'=>$msg[$inline]['caption'],
                'input_message_content'=>['parse_mode'=>'HTML'],
          ]])
        ]);
        }
        if($msg[$inline]['caption'] == null){
        bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'voice',
                'id'=>base64_encode(rand(5,555)),
                'title'=>"- Nashrni yuborish uchun bosing,",
                'voice_file_id'=>$msg[$inline]['file_id'],
                'input_message_content'=>['parse_mode'=>'HTML'],
          ]])
        ]);
        }
    }
    if ($type == 'voice_keyboard') {
       if($msg[$inline]['caption'] != null){
        bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'voice',
                'id'=>base64_encode(rand(5,555)),
                'title'=>"- Nashrni yuborish uchun bosing,",
                'voice_file_id'=>$msg[$inline]['file_id'],
                'caption'=>$msg[$inline]['caption'],
                'reply_markup'=>$msg[$inline]['reply_markup'],
                'input_message_content'=>['parse_mode'=>'HTML'],
          ]])
        ]);
        }
        if($msg[$inline]['caption'] == null){
        bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'voice',
                'id'=>base64_encode(rand(5,555)),
                'title'=>"- Nashrni yuborish uchun bosing,",
                'voice_file_id'=>$msg[$inline]['file_id'],
                'reply_markup'=>$msg[$inline]['reply_markup'],
                'input_message_content'=>['parse_mode'=>'HTML'],
          ]])
        ]);
        }
    }
    if ($type == 'photo') {
        if($msg[$inline]['caption'] != null){
        bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'photo',
                'id'=>base64_encode(rand(5,555)),
                'title'=>"- Nashrni yuborish uchun bosing,",
                'photo_file_id'=>$msg[$inline]['file_id'],
                'caption'=>$msg[$inline]['caption'],
                'input_message_content'=>['parse_mode'=>'HTML'],
          ]])
        ]);
        }
        if($msg[$inline]['caption'] == null){
        bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'photo',
                'id'=>base64_encode(rand(5,555)),
                'title'=>"- Nashrni yuborish uchun bosing,",
                'photo_file_id'=>$msg[$inline]['file_id'],
                'input_message_content'=>['parse_mode'=>'HTML'],
          ]])
        ]);
        }
    }
    if ($type == 'photo_keyboard') {
        if($msg[$inline]['caption'] != null){
        bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'photo',
                'id'=>base64_encode(rand(5,555)),
                'title'=>"- Nashrni yuborish uchun bosing,",
                'photo_file_id'=>$msg[$inline]['file_id'],
                'caption'=>$msg[$inline]['caption'],
                'reply_markup'=>$msg[$inline]['reply_markup'],
                'input_message_content'=>['parse_mode'=>'HTML'],
          ]])
        ]);
        }
        if($msg[$inline]['caption'] == null){
        bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'photo',
                'id'=>base64_encode(rand(5,555)),
                'title'=>"- Nashrni yuborish uchun bosing,",
                'photo_file_id'=>$msg[$inline]['file_id'],
                'reply_markup'=>$msg[$inline]['reply_markup'],
                'input_message_content'=>['parse_mode'=>'HTML'],
          ]])
        ]);
        }
    }
    if ($type == 'sticker') {
        bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'sticker',
                'id'=>base64_encode(rand(5,555)),
                'title'=>"- Nashrni yuborish uchun bosing,",
                'sticker_file_id'=>$msg[$inline]['file_id'],

          ]])
        ]);
    }
    if ($type == 'sticker_keyboard') {
        bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'sticker',
                'id'=>base64_encode(rand(5,555)),
                'title'=>"- Nashrni yuborish uchun bosing,",
                'sticker_file_id'=>$msg[$inline]['file_id'],
                'reply_markup'=>$msg[$inline]['reply_markup'],
          ]])
        ]);
    }
    if ($type == 'audio') {
        if($msg[$inline]['caption'] != null){
        bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'audio',
                'id'=>base64_encode(rand(5,555)),
                'title'=>"- Nashrni yuborish uchun bosing,",
                'audio_file_id'=>$msg[$inline]['file_id'],
                'caption'=>$msg[$inline]['caption'],
                'input_message_content'=>['parse_mode'=>'HTML'],
          ]])
        ]);
        }
        if($msg[$inline]['caption'] == null){
        bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'audio',
                'id'=>base64_encode(rand(5,555)),
                'title'=>"- Nashrni yuborish uchun bosing,",
                'audio_file_id'=>$msg[$inline]['file_id'],
                'input_message_content'=>['parse_mode'=>'HTML'],
          ]])
        ]);
        }
    }
    if ($type == 'audio_keyboard') {
        if($msg[$inline]['caption'] != null){
        bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'audio',
                'id'=>base64_encode(rand(5,555)),
                'title'=>"- Nashrni yuborish uchun bosing,",
                'audio_file_id'=>$msg[$inline]['file_id'],
                'caption'=>$msg[$inline]['caption'],
                'reply_markup'=>$msg[$inline]['reply_markup'],
                'input_message_content'=>['parse_mode'=>'HTML'],
          ]])
        ]);
        }
        if($msg[$inline]['caption'] == null){
        bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'audio',
                'id'=>base64_encode(rand(5,555)),
                'title'=>"- Nashrni yuborish uchun bosing,",
                'audio_file_id'=>$msg[$inline]['file_id'],
                'reply_markup'=>$msg[$inline]['reply_markup'],
                'input_message_content'=>['parse_mode'=>'HTML'],
          ]])
        ]);
        }
    }
    if ($type == 'video') {
        if($msg[$inline]['caption'] != null){
        bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'video',
                'id'=>base64_encode(rand(5,555)),
                'title'=>"- Nashrni yuborish uchun bosing,",
                'video_file_id'=>$msg[$inline]['file_id'],
                'caption'=>$msg[$inline]['caption'],
                'input_message_content'=>['parse_mode'=>'HTML'],
          ]])
        ]);
        }
        if($msg[$inline]['caption'] == null){
        bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'video',
                'id'=>base64_encode(rand(5,555)),
                'title'=>"- Nashrni yuborish uchun bosing,",
                'video_file_id'=>$msg[$inline]['file_id'],
                'input_message_content'=>['parse_mode'=>'HTML'],
          ]])
        ]);
        }
    }
    if ($type == 'video_keyboard') {
        if($msg[$inline]['caption'] != null){
        bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'video',
                'id'=>base64_encode(rand(5,555)),
                'title'=>"- Nashrni yuborish uchun bosing,",
                'video_file_id'=>$msg[$inline]['file_id'],
                'caption'=>$msg[$inline]['caption'],
                'reply_markup'=>$msg[$inline]['reply_markup'],
                'input_message_content'=>['parse_mode'=>'HTML'],
          ]])
        ]);
        }
        if($msg[$inline]['caption'] == null){
        bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'video',
                'id'=>base64_encode(rand(5,555)),
                'title'=>"- Nashrni yuborish uchun bosing,",
                'video_file_id'=>$msg[$inline]['file_id'],
                'reply_markup'=>$msg[$inline]['reply_markup'],
                'input_message_content'=>['parse_mode'=>'HTML'],
          ]])
        ]);
        }
    }
    if ($type == 'doc_keyboard') {
        if($msg[$inline]['caption'] != null){
        bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'document',
                'id'=>base64_encode(rand(5,555)),
                'title'=>"- Nashrni yuborish uchun bosing,",
                'document_file_id'=>$msg[$inline]['file_id'],
                'caption'=>$msg[$inline]['caption'],
                'reply_markup'=>$msg[$inline]['reply_markup'],
                'input_message_content'=>['parse_mode'=>'HTML'],
          ]])
        ]);
        }
        if($msg[$inline]['caption'] == null){
        bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'document',
                'id'=>base64_encode(rand(5,555)),
                'title'=>"- Nashrni yuborish uchun bosing,",
                'document_file_id'=>$msg[$inline]['file_id'],
                'reply_markup'=>$msg[$inline]['reply_markup'],
                'input_message_content'=>['parse_mode'=>'HTML'],
          ]])
        ]);
        }
    }
     if ($type == 'doc') {
        if($msg[$inline]['caption'] != null){
        bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'document',
                'id'=>base64_encode(rand(5,555)),
                'title'=>"- Nashrni yuborish uchun bosing,",
                'document_file_id'=>$msg[$inline]['file_id'],
                'caption'=>$msg[$inline]['caption'],
                'input_message_content'=>['parse_mode'=>'HTML'],
          ]])
        ]);
        }
        if($msg[$inline]['caption'] == null){
        bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'document',
                'id'=>base64_encode(rand(5,555)),
                'title'=>"- Nashrni yuborish uchun bosing,",
                'document_file_id'=>$msg[$inline]['file_id'],
                'input_message_content'=>['parse_mode'=>'HTML'],
          ]])
        ]);
        }
    }
}

if($chanel_video or $channel_audio or $channel_poto or $chanel_doc or $channel_text){
    $export = bot('exportChatInviteLink',[
    'chat_id'=>$channel_id,
    ]);
    $a = $export->result;
    bot('editMessageCaption',[
        'chat_id'=>$channel_id,
        'caption'=>"👇👉Bizga qo'shiling👈👇\n [🌐 @$channel_user] ✅ \n 🆔 : [$channel_mid]",
        'message_id'=>$channel_mid,
        'parse_mode'=> 'Markdown',
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"♻Do'stlarga Yuborish", "url"=>"https://t.me/share/url?url=https://t.me/$channel_user/$channel_mid"]],
[['text'=>"✅Do'stlarni Chaqirish", "url"=>"https://t.me/share/url?url=$a"]],
            ]
        ])
        ]);
}