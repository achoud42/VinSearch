# VinSearch
Created a search tool to search VIN

## 1. Purpose

Create a search tool: http://<test VM>/vinsearch/search.php<br/>
1. Containing HTML which prompts the user for a "VIN" input:<br/>
VIN: [ ] [ Search ]<br/>
2. Upon clicking [ Search ], the PHP file will query a "vehicle_listings" MySQL table and output the matching result (if any) in a table...<br/>
VIN: 123<br/>
Year: ...<br/>
Make: ...<br/>
Model: ...<br/>
.... (other details)<br/>
Input file: https://drive.google.com/file/d/1Y-1S1ol9dKkM0zhcTR7X7OM5M2HN7rR5/view?usp=sharing<br/>

Table - Vehicle_listings :
    This  [vehicle_listings table](https://passimage.in/i/12ffbf4d2efbe610e5ea.png) will  have the vin and the metadata
    
## 2. Searched Results
1. when we searched VIN :WBAPK5C55BA662423 we found  [this](http://localhost/anurag/search.php?query=WBAPK5C55BA662423)
2. when we searched VIN : WBAPK5C55BA6624 we found [this](http://localhost/anurag/search.php?query=WBAPK5C55BA6624)
  
