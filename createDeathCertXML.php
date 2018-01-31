<?php



	$hdr = file_get_contents("php://input");

	/*Write input to log for debugging*/

	$myFile = "submitForm_in.log";
	$fh = fopen($myFile, 'a') or die("can't open file");
	$dt_time = date("d-M-Y-h:i-a");
	fwrite($fh, $dt_time);
	fwrite($fh, "$hdr");
	fwrite($fh, "/n");
	fclose($fh);



try{
//initialize vars

 $lastname = '';
 $firstname = '';
 $middlename = '';
 $dssn = '';
 $gender = '';
 $mrn = '';
 $birthmm = '';
 $birthdd = '';
 $birthccyy = '';
 $DeathCCYY = '';
 $DeathMM = '';
 $DeathDD = '';
 $TimeOfDeathHH = '';
 $TimeOfDeathMM = '';
 $ImmediateCause = '';
 $ImmediateInterval = '';
 $ImmediateIntervalUnit = '';
 $AdditionalCause1 = '';
 $AdditionalInterval1 = '';
 $AdditionalIntervalUnit1 = '';
 $AdditionalCause2 = '';
 $AdditionalInterval2 = '';
 $AdditionalIntervalUnit2 = '';
 $UnderlyingCause = '';
 $UnderlyingInterval = '';
 $UnderlyingIntervalUnit = '';
 $OtherConditions = '';
 $AutopsyDone = '';
 $AutopsyAvailable = '';
 $MannerOfDeath = '';
 $Tobacco = '';
 $Pregnant = '';
 $Injury = '';
 $InjuryAtWork = '';
 $InjuryCCYY = '';
 $InjuryMM = '';
 $InjuryDD = '';
 $InjuryTimeHH = '';
 $InjuryTimeMM = '';
 $InjuryStreet = '';
 $InjuryCity = '';
 $InjuryCounty = '';
 $InjuryState = '';
 $InjuryCountry = '';
 $InjuryPlace = '';
 $InjuryMotorVehicle = '';
 $InjuryMotorSpec = '';
 $InjuryDescription1 = '';
 $InjuryDescription2 = '';
 $CertifierSignCCYY = '';
 $CertifierSignMM = '';
 $CertifierSignDD = '';
 $CertifierName = '';
 $FacilityName = '';
 $CertifierLicense = '';




//GET POST VARS
                 if (isset($_POST['VRDR_Decedent_Name_given_1'])){
					 $firstname = $_POST['VRDR_Decedent_Name_given_1'];    //init,set, x
				 }
				 if (isset($_POST['VRDR_Decedent_Name_given_2'])){
					 $middlename = $_POST['VRDR_Decedent_Name_given_2'];    //init,set, x
				 }

				 if (isset($_POST['VRDR_Decedent_Name_given_family'])){
					 $lastname = $_POST['VRDR_Decedent_Name_given_family']; //init,set,x
				 }
				 if (isset($_POST['VRDR_DSSN'])){
					 $dssn = $_POST['VRDR_DSSN']; //init,set,x
				 }
				 if (isset($_POST['VRDR_PatientGenderCode'])){
					 $gender = $_POST['VRDR_PatientGenderCode']; //init,set,x
				 }

				 if (isset($_POST['VRDR_BirthDate'])){
					 $birthmm = substr($_POST['VRDR_BirthDate'],0,2);
					 $birthdd = substr($_POST['VRDR_BirthDate'],3,2);
					 $birthccyy = substr($_POST['VRDR_BirthDate'],6,4) ;  //init,set,x

				 }

                 if (isset($_POST['VRDR_PatientMedicalRecordNumber'])){
                    $mrn = $_POST['VRDR_PatientMedicalRecordNumber']; //init,set,x
	              }
				 if (isset($_POST['VRDR_datePronouncedDead'])){
				  $DeathCCYY = substr($_POST['VRDR_datePronouncedDead'],6,4); //init,set,x
				  $DeathMM = substr($_POST['VRDR_datePronouncedDead'],0,2);
				  $DeathDD = substr($_POST['VRDR_datePronouncedDead'],3,2);
				  }

				  if (isset($_POST['VRDR_Pronounced_Dead_Main_Hour'])){
			      $TimeOfDeathHH = $_POST['VRDR_Pronounced_Dead_Main_Hour'];  //init, set, x
				  }
				  if (isset($_POST['VRDR_Pronounced_Dead_Main_Minute'])){
			      $TimeOfDeathMM = $_POST['VRDR_Pronounced_Dead_Main_Minute'];   //init, set, x
                  }
                  if (isset($_POST['selLastSeenMM'])){
			      $LastSeenMM = $_POST['selLastSeenMM']  ;
			      }
				  if (isset($_POST['selLastSeenDD'])){
				  $LastSeenDD = $_POST['selLastSeenDD']  ;
			      }
				  if (isset($_POST['selLastSeenCCYY'])){
				  $LastSeenCCYY = $_POST['selLastSeenCCYY'];
			      }
				  if (isset($_POST['VRDR_immediateCause'])){
				  $ImmediateCause = $_POST['VRDR_immediateCause']  ;
				  }
				  if (isset($_POST['txtImmediateNum'])){
				  $ImmediateInterval = $_POST['txtImmediateNum']  ;
				  }
				  if (isset($_POST['selImmediateIntervalUnit'])){
				  $ImmediateIntervalUnit = $_POST['selImmediateIntervalUnit'];
				  }
				  if (isset($_POST['Line1b'])){
				  $AdditionalCause1 = $_POST['Line1b']  ;
				  }
				  if (isset($_POST['txtAdditionalNum1'] )){
				  $AdditionalInterval1 = $_POST['txtAdditionalNum1']  ;
				  }
				  if (isset($_POST['selAdditionalIntervalUnit1'])){
				  $AdditionalIntervalUnit1 = $_POST['selAdditionalIntervalUnit1'];
				  }
				  if (isset($_POST['Line1c'])){
				  $AdditionalCause2 = $_POST['Line1c']  ;
				  }
				  if (isset($_POST['txtAdditionalNum2'])){
				  $AdditionalInterval2 = $_POST['txtAdditionalNum2']  ;
				  }
				  if (isset($_POST['selAdditionalIntervalUnit2'])){
				  $AdditionalIntervalUnit2 = $_POST['selAdditionalIntervalUnit2'];
				  }
				  if (isset($_POST['VRDR_UnderlyingCause'])){
				  $UnderlyingCause = $_POST['VRDR_UnderlyingCause']  ;
				  }
				  if (isset($_POST['txtUnderlyingNum'])){
				  $UnderlyingInterval = $_POST['txtUnderlyingNum']  ;
				  }
				  if (isset($_POST['lstUnderlyingIntervalUnit'])){
				  $UnderlyingIntervalUnit = $_POST['lstUnderlyingIntervalUnit'];
				  }
				  if (isset($_POST['Part2'])){
				  $OtherConditions = $_POST['Part2']  ;
				  }
				  if (isset($_POST['chkAutopsyDone'])){
				  $AutopsyDone = $_POST['chkAutopsyDone']  ;
				  }
				  if (isset($_POST['radAutopsyAvailable'])){
				  $AutopsyAvailable = $_POST['radAutopsyAvailable'];
				  }
				  if (isset($_POST['lstManner'])){
				  $MannerOfDeath = $_POST['lstManner'] ;
				  }
				  if (isset($_POST['lstTobacco'])){
				  $Tobacco = $_POST['lstTobacco']  ;
				  }
				   if (isset($_POST['lstPregnant'])){
				  $Pregnant = $_POST['lstPregnant'];
                  }
				   if (isset($_POST['radInjury'])){
				  $Injury = $_POST['radInjury']  ;
				  }
				   if (isset($_POST['radInjuryAtWork'])){
				  $InjuryAtWork = $_POST['radInjuryAtWork'];
				  }
				   if (isset($_POST['selInjuryCCYY'])){
				  $InjuryCCYY = $_POST['selInjuryCCYY'];
			      }
				   if (isset($_POST['selInjuryMM'])){
				  $InjuryMM = $_POST['selInjuryMM']  ;
			      }
				  if (isset($_POST['selInjuryDD'])){
				  $InjuryDD = $_POST['selInjuryDD']  ;
			      }
				  if (isset($_POST['selInjuryTimeHH'])){
				  $InjuryTimeHH = $_POST['selInjuryTimeHH']  ;
			      }
				   if (isset($_POST['selInjuryTimeMM'])){
				  $InjuryTimeMM = $_POST['selInjuryTimeMM'] ;
			      }
				   if (isset($_POST['txtInjuryStreet'])){
				  $InjuryStreet = $_POST['txtInjuryStreet'];
			      }
				   if (isset($_POST['txtInjuryCity'])){
				  $InjuryCity = $_POST['txtInjuryCity']  ;
			      }
				   if (isset($_POST['txtInjuryCounty'])){
				  $InjuryCounty = $_POST['txtInjuryCounty'] ;
			      }
				   if (isset($_POST['txtInjuryState'])){
				  $InjuryState = $_POST['txtInjuryState']  ;
			      }
				   if (isset($_POST['txtInjuryCountry'])){
				  $InjuryCountry = $_POST['txtInjuryCountry'];
			      }
				   if (isset($_POST['txtInjuryPlace'])){
				  $InjuryPlace = $_POST['txtInjuryPlace']  ;
			      }
				   if (isset($_POST['lstInjuryMotorVehicle'])){
				  $InjuryMotorVehicle = $_POST['lstInjuryMotorVehicle'];
			      }
				   if (isset($_POST['txtInjuryMotorSpec'])){
				  $InjuryMotorSpec = $_POST['txtInjuryMotorSpec'] ;
			      }
				   if (isset($_POST['txtInjuryDescription1'])){
				  $InjuryDescription1 = $_POST['txtInjuryDescription1'] ;
			      }
				   if (isset($_POST['txtInjuryDescription2'])){
				  $InjuryDescription2 = $_POST['txtInjuryDescription2'];
				  }
				   if (isset($_POST['txtCertifierSignCCYY'])){
				  $CertifierSignCCYY = $_POST['txtCertifierSignCCYY'] ;
			      }
				   if (isset($_POST['txtCertifierSignMM'] )){
				  $CertifierSignMM = $_POST['txtCertifierSignMM']  ;
			      }
				   if (isset($_POST['txtCertifierSignDD'] )){
				  $CertifierSignDD = $_POST['txtCertifierSignDD']  ;
			      }
				   if (isset($_POST['txtCertifierStatus'])){
				  $CertifierStatus=$_POST['txtCertifierStatus'] ;
			      }
				   if (isset($_POST['txtDaysLastSeenToDeath'])){
				  $DaysLastSeenToDeath=$_POST['txtDaysLastSeenToDeath']  ;
	      		  }
				   if (isset($_POST['radInjury'])){
				  $Injury=$_POST['radInjury'] ;
	      		  }
                  if (isset($_POST['VRDR_CertifierName'])){
				  $CertifierName=$_POST['VRDR_CertifierName'] ;
	      		  }
				   if (isset($_POST['VRDR_FacilityName'])){
				  $FacilityName=$_POST['VRDR_FacilityName'] ;
	      		  }
				   if (isset($_POST['CertifierLicense'])){
				  $CertifierLicense=$_POST['CertifierLicense'] ;
	      		  }

				 // $LastUpdated = $TimeStamp;

				  if (isset($_POST['txtMasterStatus'])){
				  $MasterStatus = $_POST['txtMasterStatus'];
	      		  }



}catch(Exception $e){
			echo  "<error>Caught exception: ".  $e->getMessage(). "</error>";
}

$CertifierSignCCYY = date("Y");
$CertifierSignMM = date("M");
$CertifierSignDD = date("d");



//CREATe XML Document//

$xml = new SimpleXMLElement('<?xml version="1.0" encoding="utf-8"?><deathCertificate></deathCertificate>');

$xml->addAttribute('version', '1.0');
$xml->addChild('datetime', date('Y-m-d H:i:s'));



//PERSON
$person = $xml->addChild('person');
$person->addChild('firstname', $firstname);
$person->addChild('lastname', $lastname);
$person->addChild('middlename',$middlename);
$person->addChild('ssn', $dssn);
$person->addChild('gender', $gender);
$person->addchild('MRN',$mrn);
$dth_causes = $xml->addchild('dth_causes');
$dob = $person->addChild('DOB');
$dob->addChild('Month', $birthmm);
$dob->addChild('Day', $birthdd);
$dob->addChild('Year', $birthccyy);

//Causes of Death
$ImmediateCauses = $dth_causes->addChild('ImmediateCauses');
$ImmediateCauses->addChild('CauseLiteral',$ImmediateCause);
$ImmediateCauses->addChild('Interval', $ImmediateInterval);
$ImmediateCauses->addChild('IntervalUnit', $ImmediateIntervalUnit);
$AdditionalCauses1 = $dth_causes->addChild('AdditionalCauses1');
$AdditionalCauses1->addChild('CauseLiteral',$AdditionalCause1);
$AdditionalCauses1->addChild('Interval', $AdditionalInterval1);
$AdditionalCauses1->addChild('IntervalUnit', $AdditionalIntervalUnit1);
$AdditionalCauses2 = $dth_causes->addChild('AdditionalCauses2');
$AdditionalCauses2->addChild('CauseLiteral', $AdditionalCause2);
$AdditionalCauses2->addChild('Interval', $AdditionalInterval2);
$AdditionalCauses2->addChild('IntervalUnit', $AdditionalIntervalUnit2);
$UnderlyingCauses = $dth_causes->addChild('UnderlyingCauses');
$UnderlyingCauses->addChild('CauseLiteral', $UnderlyingCause);
$UnderlyingCauses->addChild('Interval', $UnderlyingInterval);
$UnderlyingCauses->addChild('IntervalUnit', $UnderlyingIntervalUnit);
$OtherConditioins = $dth_causes->addChild('OtherConditions', $OtherConditions);
$Autopsy = $xml->addChild('Autopsy');
$Autopsy->addChild('AutopsyDone', $AutopsyDone);
$Autopsy->addChild('AutopsyAvailable',$AutopsyAvailable);
$xml->addChild('MannerOfDeath', $MannerOfDeath);
$xml->addChild('Tobacco',$Tobacco);
$xml->addChild('Pregnant',$Pregnant);

//Injury Info
$injuryInfo = $xml->addChild('Injury');
$injuryInfo->addChild('InjYesNo', $Injury);
$injuryInfo->addChild('InjuryAtWork',$InjuryAtWork);
$injuryDate = $injuryInfo->addChild('InjuryDate');
$injuryDate->addChild('InjuryMonth', $InjuryMM);
$injuryDate->addChild('InjuryDay', $InjuryDD);
$injuryDate->addChild('InjuryYear', $InjuryCCYY);
$injuryDate->addChild('InjuryHour', $InjuryTimeHH);
$injuryDate->addChild('InjuryMinute', $InjuryTimeMM);
$injuryLocation = $injuryInfo->addChild('InjuryLocation');
$injuryLocation->addChild('InjuryStreet',$InjuryStreet);
$injuryLocation->addChild('InjuryCity',$InjuryCity);
$injuryLocation->addChild('InjuryCounty',$InjuryCounty);
$injuryLocation->addChild('InjuryState',$InjuryState);
$injuryLocation->addChild('InjuryCountry',$InjuryCountry);
$injuryLocation->addChild('InjuryPlace',$InjuryPlace);
$injuryInfo->addChild('InjuryMotorVehicle',$InjuryMotorVehicle);
$injuryInfo->addChild('InjuryMotorSpec',$InjuryMotorSpec);
$injuryInfo->addChild('InjuryDescription1',$InjuryDescription1);
$injuryInfo->addChild('InjuryDescription2',$InjuryDescription2);



$address = $person->addchild('address');
$address->addchild('homeaddress', 'Andersgatan 2, 432 10 Göteborg');
$address->addChild('workaddress', 'Andersgatan 3, 432 10 Göteborg');
$dod = $person->addChild('dod');
$dmonth = $dod->addChild('dmonth', $DeathMM);
$dday = $dod->addChild('dday', $DeathDD);
$dyear = $dod->addChild('dyear',$DeathCCYY);
$dhour = $dod->addChild('dhour',$TimeOfDeathHH);
$dmin = $dod->addChild('dmin', $TimeOfDeathMM);


//Certifier
$certifier = $xml->addChild('certifier');
$certifier->addChild('certifierName', $CertifierName);
$certifier->addChild('certifierFacility',$FacilityName);
$certifier->addChild('certifierAddress');
$certifier->addChild('certifierLicense', $CertifierLicense);
$certSignDate = $certifier->addChild('CertifierSignDate');
$certSignDate->addChild('CertifierSignCCYY', $CertifierSignCCYY);
$certSignDate->addChild('CertifierSignMM', $CertifierSignMM);
$certSignDate->addChild('CertifierSignDD', $CertifierSignDD);


$facility = $xml->addChild('facility');
$facility->addChild('facilityName');


//echo $xml->asXML();
$parameters = $xml->asXML();


try {
	//$client = new SoapClient('http://localhost/SubmitForm/SubmitFormService.wsdl',array("trace"=>1, "exceptions"=>1));
	  $client = new SoapClient('http://localhost:8081/services/Mirth?wsdl');                      //CHANGE PORT TO REFLECT YOUR MIRTH CHANNEL LISTENER PORT
	    global $soapRequest;
        global $soapResponse;

		$params= array('arg0'=>$parameters);
		$functions = $client->__getFunctions();
		//var_dump($functions);
		$types = $client->__getTypes();

		//var_dump($types);

	$webService = $client->acceptMessage($params);
	  //var_dump($webService);
	  $wsarray = json_decode(json_encode($webService), True);
	  //var_dump($wsarray);





		$soapResult = $client->__getLastResponse();
    $soapRequest = $client->__getLastRequest();



//Return success message

	 echo "<html><head><style type=\"text/css\">.style1 {	color: #000080;	font-size: large;}</style></head><p class=\"style1\">Michigan Department of Health and Services * Office of Vital Records and Statistics</p>";


 //created date, time and user
           $cdate = date("Ymd");
           $ctime = date("Hi");
           $cuser = "RFD";

        //registereddate;
        $regyear = date("Y");
        $regmon = date("m");
        $regday = date("d");


             echo "<h3>Death Certificate Form received.</h3>";
             echo "Date received: $cdate<br/>";
			 echo "Date of death: $DeathCCYY-$DeathMM-$DeathDD";
             echo "Deceased name: $lastname, $firstname<br/>";
			 echo "Certifier: $CertifierName<br/>";
			 echo "Received from: $FacilityName<br/>";









} catch (SoapFault $fault)   {
          trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}\n" .
          "faultstring: {$fault->faultstring})", E_USER_ERROR);
    }




?>
