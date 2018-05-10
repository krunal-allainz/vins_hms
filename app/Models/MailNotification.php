<?php

namespace euro_hms\Models;

use Illuminate\Database\Eloquent\Model;
use euro_hms\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

class MailNotification extends Model
{
    //

    /**
		This fucntiona use for check whick template will use for send mail
    */


    static function mailSendDetail($type,$emailData){
    		
    	if($type == 'password_reset_link'){
    	   $content = MailNotification::useTemplate(1);
    	   MailNotification::sendMail($emailData,$content);
    	}

    }


    static function send($emailData,$content){ 
    	    $content = $content->content;
    	    $NAME = $emailData['NAME'];
    	    $LINK = $emailData['LINK'];

    	    foreach ($emailData as $key=>$value){
    	    	str_replace("{{".$key."}}",$value, $content); 
    	    }
    	    dd($content);
    	    if($emailData['WITH-ATTECHMENT'] == 'no'){
		    		return Mail::to($emailData['EMAIL'])->send($emailData, $emailData['SUBJECT'],$content,'mital.sharma@netfonia.us','');
	    }else{
	    	$attachment = '';
	    	return Mail::to($emailData['EMAIL'])->send(new SendMail($emailData, $emailData['SUBJECT'],$content,'mital.sharma@netfonia.us',$attachment));
	    }

    			
    	
    	/*	$contact_details = $email_details;        
           $recipient = $email_recipients;
           if ($email_from != null && !empty($email_from)) {
              Mail::to($recipient)->send(new SendMail($contact_details, $email_subject,  $email_view, $email_from,$attachment));
           }
           else{
               Mail::to($recipient)->send(new SendMail($contact_details, $email_subject,  $email_view,'',$attachment));
           }
           return response()->json([
               'status' => 'suceess',
               'message' => 'Thank you for your message. We will aim to get back to you within the next 24 hours.'
           ]);*/
    }

    static function useTemplate($id){
    	
    	return \DB::table('email_managment')->where('id',$id)->where('status',1)->first();
    }
}
