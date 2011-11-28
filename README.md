Suite Trackr
==============
This application is being built out of necessity to track and manage deployments of SuiteScript,
configurations, and custom fields/records/forms/roles within multiple NetSuite accounts (sandboxes/production).
It is currently in the **very** early stages of development.

### Goals of the Project
- Automatically delpoy versioned SuiteScripts via webservices to multiple sandboxes/production accounts
- Automatically deploy custom forms/fields/records/roles
- Document custom SuiteScripts application and use within NetSuite
- Track deployment schedules and developer resources by environment (DEV,TEST,PROD)
- Track differences between sandbox and production (or multiple sandboxes, ie DEV, TEST, PROD)


### Current Dependencies
- Selenium Server is needed for "automation"

### Demo'ing Automation (with a sandbox account)
- Start selenium-server (java -jar selenium-server-standalone-2.x.x.jar)
- Modify app/config/parameters.ini with your netsuite username and password
- run `app/console netsuite:capture-forms 123`
- Selenium should fire-up and log into netsuite.
