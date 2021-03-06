USE [connectathon]
GO

/****** Object:  Trigger [translateMonthCertifierSign]    Script Date: 2/2/2018 9:00:53 AM ******/
DROP TRIGGER [dbo].[translateMonthCertifierSign]
GO

/****** Object:  Trigger [dbo].[translateMonthCertifierSign]    Script Date: 2/2/2018 9:00:53 AM ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO



-- =============================================
-- Author:		Humphrysr
-- Create date: 2.2.2018
-- Description:	Format ADT A04 2.6 HL7 message attributes
-- =============================================
CREATE TRIGGER [dbo].[translateMonthCertifierSign] 
   ON  [dbo].[edenmaster]  
   AFTER INSERT
AS 
BEGIN
	-- SET NOCOUNT ON added to prevent extra result sets from
	-- interfering with SELECT statements.
	SET NOCOUNT ON;

UPDATE edenmaster   
SET     [CertifierSignMM] =  
       CASE  
		   WHEN [CertifierSignMM] = 'Jan' THEN '01' 
		   WHEN [CertifierSignMM] = 'Feb' THEN '02'
		   WHEN [CertifierSignMM] = 'Mar' THEN '03' 
		   WHEN [CertifierSignMM] = 'Apr' THEN '04'  
		   WHEN [CertifierSignMM] = 'May' THEN '05' 
		   WHEN [CertifierSignMM] = 'Jun' THEN '06'     
		   WHEN [CertifierSignMM] = 'Jul' THEN '07' 
		   WHEN [CertifierSignMM] = 'Aug' THEN '08'  
		   WHEN [CertifierSignMM] = 'Sep' THEN '09' 
        ELSE [CertifierSignMM]
        END 


-- Certifier sign day formatting

UPDATE edenmaster   
SET    [CertifierSignDD] =  
       CASE  
		   WHEN ltrim(rtrim([CertifierSignDD]))  = '1' THEN '01' 
		   WHEN ltrim(rtrim([CertifierSignDD]))  = '2' THEN '02'
		   WHEN ltrim(rtrim([CertifierSignDD]))  = '3' THEN '03' 
		   WHEN ltrim(rtrim([CertifierSignDD]))  = '4' THEN '04'  
		   WHEN ltrim(rtrim([CertifierSignDD]))  = '5' THEN '05' 
		   WHEN ltrim(rtrim([CertifierSignDD]))  = '6' THEN '06'     
		   WHEN ltrim(rtrim([CertifierSignDD]))  = '7' THEN '07' 
		   WHEN ltrim(rtrim([CertifierSignDD]))  = '8' THEN '08'  
		   WHEN ltrim(rtrim([CertifierSignDD]))  = '9' THEN '09' 
        ELSE ltrim(rtrim([CertifierSignDD])) 
        END 


-- Uses: SYSDATETIMEOFFSET()
-- Purpose: Converts time to match DTM-S with timezoneoffset for MSH-7
-- Date: 2.2.2018
--
--
UPDATE edenmaster   
	SET  [MSH_7_DateTimeofMessage] = 
         CONVERT(char(4), YEAR(SYSDATETIMEOFFSET())) + 
         RIGHT('00' + CONVERT(varchar(2),MONTH(SYSDATETIMEOFFSET())), 2) +
		 RIGHT('00' + CONVERT(varchar(2),DAY(SYSDATETIMEOFFSET())), 2) +
		 RIGHT('00' + CONVERT(VARCHAR(2),DATEPART(hour, SYSDATETIMEOFFSET())),2) +
    	 RIGHT('00' + CONVERT(VARCHAR(2),DATEPART(minute, SYSDATETIMEOFFSET())),2) +
		 RIGHT('00' + CONVERT(VARCHAR(2),DATEPART(second, SYSDATETIMEOFFSET())),2) +
     	CASE
			 WHEN LEN(RTRIM(DATEPART(TZoffset, SYSDATETIMEOFFSET()))) = 4  THEN 
			      SUBSTRING(RTRIM(DATEPART(TZoffset, SYSDATETIMEOFFSET())),1,1) + '0'+
				  SUBSTRING(RTRIM(DATEPART(TZoffset, SYSDATETIMEOFFSET())),2,3)
             ELSE RIGHT('0000' + CONVERT(VARCHAR(4),DATEPART(TZoffset, SYSDATETIMEOFFSET())),4)
         END -- AS msh9



END




GO







