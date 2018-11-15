<?php

namespace euro_hms\Models;

 use Illuminate\Database\Eloquent\Model;
 use euro_hms\Mail\SendMail;	
 use Illuminate\Support\Facades\Mail;	
 
 
 	
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
    	 return MailNotification::sendMail($emailData,$content);	
    	}	
        
	   
    }	
	
	
    static function sendMail($emailData,$content){ 	
    	    $content1 = $content->content;	
    	   	
    	    foreach ($emailData as $key=>$value){	
    	    	//echo $key.'=='.$value;	
	
			$content1 = str_replace('{{'.$key.'}}',$value, $content1); 	
    	    }	
    	    	
    	   $emailData['content'] = $content1;
          $from  = config('mail.from.address');
    	   
            try {
                 if($emailData['WITH-ATTECHMENT'] == 'no'){ 
                    // Mail::to($emailData['EMAIL'])->send($emailData, $emailData['SUBJECT'],$content1,'mital.sharma@netfonia.us','');
                     Mail::to($emailData['EMAIL'])->send(new sendMail($emailData,$emailData['SUBJECT'],'emails.email_template',$from ,''));
                     return 1;
                }else{  
                     $attachment = '';   
                     //return Mail::to($emailData['EMAIL'])->send($emailData, $emailData['SUBJECT'],$content1,'mital.sharma@netfonia.us',$attachments);
                     Mail::to($emailData['EMAIL'])->send(new sendMail($emailData,$emailData['SUBJECT'],'emails.email_template',$from ,$attachments));    
                     return 1;
                }

                 //return back();
            } catch (Exception $ex) {
                 //Debug via $ex->getMessage();
                return 0;
            }

           
               	
    }	
	
    static function useTemplate($id){	
    		
    	return \DB::table('email_managment')->where('id',$id)->where('status',1)->first();	
    }	

}
