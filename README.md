# WEBT | CORE | Composer for PHP Projects

## Overview
The PAA (Pet Appreciation Association) has contacted your company in order to create a website which helps pet owners to generate a sustainable and cheap emergency coil.  The Pet Emergency Coil lets you directly phone the owner by scanning a QR Code. Your website is supposed to create these QR Codes from given phone numbers.

## User Story 1
*As a Developer I want to set up composer, so that I have a package manager available for professional development.*

### Acceptance Criteria
- Composer is available on the local development environment
- Composer can be called via the command line
- Composer is updated to the latest version

## User Story 2
*As a Developer I want to initiate a new composer project in my working directory, so that the rest of my team can replicate my setup.*

### Acceptance Criteria
- A composer.json exists
- A composer.lock exists
- Autoloading according to PSR-4 is enabled for the project

## User Story 3
*As a Developer I want to require the package “endroid/qr-code” in my project, so that I can make use of predefined QR-Code generation functions.*

### Acceptance Criteria
- endroid/qr-code is listed in the required section of the composer.json
- endroid/qr-code is downloaded on the local development environment
- Autoloading for endroid/qr-code is tested and working

## User Story 4
*As a Developer I want to use the package endroid/qr-code to generate a demo QR code for a fixed demonstration phone number and output it on a web page, so that I can showcase the basic functionality of QR Code generation.*

### Acceptance Criteria
- A QR code for the phone number +43 1 22 33 444 is displayed on a demo webpage
- The correct readability of the QR Code has been tested with a smartphone

## User Story 5
*As a Developer I want to create a styled webpage with a form in which users can input their phonenumber and submit it, so that I can link it to the QR code generation.*

### Acceptance Criteria
- A responsive website with basic styling exists
- A form exists where users can input their phone number
- After submitting the form the qr code for the phone number gets displayed on the page

#### Links
https://my.skilldisplay.eu/en/skillset/81
