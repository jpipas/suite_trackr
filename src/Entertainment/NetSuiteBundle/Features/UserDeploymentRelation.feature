Feature: User Deployment Relationship
	In order to setup a valid deployment doc
	As a system
	I need a working user deployment relationship
	
Scenario: A user contains a deployment
	Given 	I have a user "jpipas"
	And 	I have a deployment "Track 13"
	When 	I add a deployment "Track 13" to user "jpipas"
	Then	I should find "Track 13" in user "jpipas"