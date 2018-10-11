<?php

namespace euro_hms\Models;

 use Illuminate\Database\Eloquent\Model;

use Illuminate\Bus\Queueable;	
 use euro_hms\Mail\SendMail;	
 use Illuminate\Mail\Mailable;
 use Illuminate\Support\Facades\Mail;	
 use Illuminate\Http\Request;
 use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

 	
 class MailNotification extends model	
 {	
    //	

    //use Queueable, SerializesModels;
	
    /**	
		This fucntiona use for check whick template will use for send mail	
    */	
	
	
    static function mailSendDetail($type,$emailData){	
    		
    	if($type == 'password_reset_link'){	
    	   $content = MailNotification::useTemplate(1);	
    	  MailNotification::sendMail($emailData,$content);	
    	}	
	
    }	
	
	
    static function sendMail($emailData,$content){ 	
    	    $content1 = $content->content;	
    	   	
    	    foreach ($emailData as $key=>$value){	
    	    	//echo $key.'=='.$value;	
	
				str_replace('{{'.$key.'}}',$value, $content1); 	
    	    }	
    	    	
    	   $emailData['content'] = $content1;
           
    	    if($emailData['WITH-ATTECHMENT'] == 'no'){	
		    		// Mail::to($emailData['EMAIL'])->send($emailData, $emailData['SUBJECT'],$content1,'mital.sharma@netfonia.us','');
               return  Mail::to($emailData['EMAIL'])->send(new sendMail($emailData,$emailData['SUBJECT'],'emails.email_template','mital.sharma@netfonia.us',''));


		    }else{	
		    	$attachment = '';	
		    	//return Mail::to($emailData['EMAIL'])->send($emailData, $emailData['SUBJECT'],$content1,'mital.sharma@netfonia.us',$attachments);
                return Mail::to($emailData['EMAIL'])->send(new sendMail($emailData,$emailData['SUBJECT'],'emails.email_template','mital.sharma@netfonia.us',$attachments));	
		    }
               	
    }	
	
    static function useTemplate($id){	
    		
    	return \DB::table('email_managment')->where('id',$id)->where('status',1)->first();	
    }	

}
