USE [connectathon]
GO

/****** Object:  Trigger [translateMonthCertifierSign]    Script Date: 1/31/2018 2:14:38 PM ******/
DROP TRIGGER [dbo].[translateMonthCertifierSign]
GO

/****** Object:  Trigger [dbo].[translateMonthCertifierSign]    Script Date: 1/31/2018 2:14:38 PM ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO


-- =============================================
-- Author:		<Author,,Name>
-- Create date: <Create Date,,>
-- Description:	<Description,,>
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

END



GO

