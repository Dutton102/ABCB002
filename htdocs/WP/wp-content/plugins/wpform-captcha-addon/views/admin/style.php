    .onoffswitch {
        position: relative; width: 90px;
        -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;
    }
   td .onoffswitch-checkbox {
        display: none;
    }
    .onoffswitch-label {
        display: block; overflow: hidden; cursor: pointer;
        border: 2px solid #999999; border-radius: 20px;
    }
    .onoffswitch-inner {
        display: block; width: 200%; margin-left: -100%;
        transition: margin 0.1s ease-in 0s;
    }
    .onoffswitch-inner:before, .onoffswitch-inner:after {
        display: block; float: left; width: 50%; height: 30px; padding: 0; line-height: 30px;
        font-size: 14px; color: white; font-family: Trebuchet, Arial, sans-serif; font-weight: bold;
        box-sizing: border-box;
    }
    .onoffswitch-inner:before {
        content: "Yes";
        padding-left: 10px;
        background-color: #34A7C1; color: #FFFFFF;
    }
    .onoffswitch-inner:after {
        content: "No";
        padding-right: 10px;
        background-color: #EEEEEE; color: #999999;
        text-align: right;
    }
    .onoffswitch-switch {
        display: block; width: 18px; margin: 6px;
        background: #FFFFFF;
        position: absolute; top: 0; bottom: 0;
        right: 56px;
        border: 2px solid #999999; border-radius: 20px;
        transition: all 0.1s ease-in 0s; 
    }
    .onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-inner {
        margin-left: 0;
    }
    .onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-switch {
        right: 0px; 

}
   

.onoffswitch {
  -webkit-transition: all 0.4s ease-in-out;
-moz-transition: all 0.4s ease-in-out;
-ms-transition: all 0.4s ease-in-out;
-o-transition: all 0.4s ease-in-out;
transition: all 0.4s ease-in-out;
}

b, strong {
    color: #666;
    font-size: 18px;
    font-weight: 700;
}


.wrap {
    background-color: #fff;
    border-radius: 3px;
    box-shadow: 0 2px 1px 0 rgba(0, 0, 0, 0.1);
    
    margin: 4% auto;
    overflow: hidden;
    padding: 40px 6%;
    width: 82%;
}

.wrap p{
  font-size: 19px;
  color:#777;
}

.wrap h1 {
    background: #7F93A5 none repeat scroll 0 0;
    color: #fff;
    font-size: 42px;
    font-weight: bold;
    margin: -40px -8% 40px;
    padding: 40px;
    text-align: center;
    text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.1);
}

.wrap h3 {
    color: #666;
    font-size: 20px;
    text-align: left;
}


.wrap #hed3 {
    background-color: #0074a2;
    height: auto;
    margin: 40px -8%;
    padding: 10px;
    text-align: center;
    text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.1);
}


#hed3 h3 {
    color: #fff;
    
    font-size: 32px;
    font-weight: 400;
    text-align: center;
}

 .wrap th
 {
  color :#666;
  font-size: 1.2em;
  padding-left: 15px;

 }


 .wrap td
 {
  padding-left: 40px;
 }
.wrap h3 a ,p a
{
  text-decoration: none;
}
.wrap td p
{
  color:#666;
  font-size:1.2em;
}
.wrap p.submit
{
  text-align: center;
}
.wrap input[type=checkbox] {
  /* All browsers except webkit*/
  transform: scale(1.2);

  /* Webkit browsers*/
  -webkit-transform: scale(1.2);


}
  /*
 This css and associated images borrow heavily from the fantastic 
 chosen select box plugin.
 
 Copyright (c) 2011 Harvest http://getharvest.com

 MIT License, https://github.com/harvesthq/chosen/blob/master/LICENSE.md
*/

td .font-select {
  font-size: 16px;
  width: 210px;
  position: relative;
  display: inline-block;
  zoom: 1;
  *display: inline;
}

td .font-select .fs-drop {
  background: #fff;
  border: 1px solid #aaa;
  border-top: 0;
  position: absolute;
  top: 29px;
  left: 0;
  -webkit-box-shadow: 0 4px 5px rgba(0,0,0,.15);
  -moz-box-shadow   : 0 4px 5px rgba(0,0,0,.15);
  -o-box-shadow     : 0 4px 5px rgba(0,0,0,.15);
  box-shadow        : 0 4px 5px rgba(0,0,0,.15);
  z-index: 999;
}

td .font-select > a {
  background-color: #fff;
  background-image: -webkit-gradient(linear, left bottom, left top, color-stop(0, #eeeeee), color-stop(0.5, white));
  background-image: -webkit-linear-gradient(center bottom, #eeeeee 0%, white 50%);
  background-image: -moz-linear-gradient(center bottom, #eeeeee 0%, white 50%);
  background-image: -o-linear-gradient(top, #eeeeee 0%,#ffffff 50%);
  background-image: -ms-linear-gradient(top, #eeeeee 0%,#ffffff 50%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#eeeeee', endColorstr='#ffffff',GradientType=0 );
  background-image: linear-gradient(top, #eeeeee 0%,#ffffff 50%);
  -webkit-border-radius: 4px;
  -moz-border-radius   : 4px;
  border-radius        : 4px;
  -moz-background-clip   : padding;
  -webkit-background-clip: padding-box;
  background-clip        : padding-box;
  border: 1px solid #aaa;
  display: block;
  overflow: hidden;
  white-space: nowrap;
  position: relative;
  height: 26px;
  line-height: 26px;
  padding: 0 0 0 8px;
  color: #444;
  text-decoration: none;
}

td .font-select > a span {
  margin-right: 26px;
  display: block;
  overflow: hidden;
  white-space: nowrap;
  line-height: 1.8;
  -o-text-overflow: ellipsis;
  -ms-text-overflow: ellipsis;
  text-overflow: ellipsis;
  cursor: pointer;
}

td .font-select > a div {
  -webkit-border-radius: 0 4px 4px 0;
  -moz-border-radius   : 0 4px 4px 0;
  border-radius        : 0 4px 4px 0;
  -moz-background-clip   : padding;
  -webkit-background-clip: padding-box;
  background-clip        : padding-box;
  background: #ccc;
  background-image: -webkit-gradient(linear, left bottom, left top, color-stop(0, #ccc), color-stop(0.6, #eee));
  background-image: -webkit-linear-gradient(center bottom, #ccc 0%, #eee 60%);
  background-image: -moz-linear-gradient(center bottom, #ccc 0%, #eee 60%);
  background-image: -o-linear-gradient(bottom, #ccc 0%, #eee 60%);
  background-image: -ms-linear-gradient(top, #cccccc 0%,#eeeeee 60%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cccccc', endColorstr='#eeeeee',GradientType=0 );
  background-image: linear-gradient(top, #cccccc 0%,#eeeeee 60%);
  border-left: 1px solid #aaa;
  position: absolute;
  right: 0;
  top: 0;
  display: block;
  height: 100%;
  width: 18px;
}

td .font-select > a div b {
  background: url('') no-repeat 0 1px;
  display: block;
  width: 100%;
  height: 100%;
  cursor: pointer;
}

td .font-select .fs-drop {
  -webkit-border-radius: 0 0 4px 4px;
  -moz-border-radius   : 0 0 4px 4px;
  border-radius        : 0 0 4px 4px;
  -moz-background-clip   : padding;
  -webkit-background-clip: padding-box;
  background-clip        : padding-box;
}

td .font-select .fs-results {
  margin: 0 4px 4px 0;
  max-height: 190px;
  width: 200px;
  padding: 0 0 0 4px;
  position: relative;
  overflow-x: hidden;
  overflow-y: auto;
}

td .font-select .fs-results li {
  line-height: 80%;
  padding: 7px 7px 8px;
  margin: 0;
  list-style: none;
  font-size: 18px;
}

td .font-select .fs-results li.active {
  background: #3875d7;
  color: #fff;
  cursor: pointer;
}
td.font-select .fs-results li em {
  background: #feffde;
  font-style: normal;
}

td.font-select .fs-results li.active em {
  background: transparent;
}

td.font-select-active > a {
  -webkit-box-shadow: 0 0 5px rgba(0,0,0,.3);
  -moz-box-shadow   : 0 0 5px rgba(0,0,0,.3);
  -o-box-shadow     : 0 0 5px rgba(0,0,0,.3);
  box-shadow        : 0 0 5px rgba(0,0,0,.3);
  border: 1px solid #5897fb;
}

td.font-select-active > a {
  border: 1px solid #aaa;
  -webkit-box-shadow: 0 1px 0 #fff inset;
  -moz-box-shadow   : 0 1px 0 #fff inset;
  -o-box-shadow     : 0 1px 0 #fff inset;
  box-shadow        : 0 1px 0 #fff inset;
  background-color: #eee;
  background-image: -webkit-gradient(linear, left bottom, left top, color-stop(0, white), color-stop(0.5, #eeeeee));
  background-image: -webkit-linear-gradient(center bottom, white 0%, #eeeeee 50%);
  background-image: -moz-linear-gradient(center bottom, white 0%, #eeeeee 50%);
  background-image: -o-linear-gradient(bottom, white 0%, #eeeeee 50%);
  background-image: -ms-linear-gradient(top, #ffffff 0%,#eeeeee 50%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#eeeeee',GradientType=0 );
  background-image: linear-gradient(top, #ffffff 0%,#eeeeee 50%);
  -webkit-border-bottom-left-radius : 0;
  -webkit-border-bottom-right-radius: 0;
  -moz-border-radius-bottomleft : 0;
  -moz-border-radius-bottomright: 0;
  border-bottom-left-radius : 0;
  border-bottom-right-radius: 0;
}

td.font-select-active > a div {
  background: transparent;
  border-left: none;
}

td.font-select-active > a div b {
  background-position: -18px 1px;
}


td span#pal {
  top: 80px; 
}

.heading_save_btn {
      float: right;
    position: relative;
    top: -20px;
    right: -5px;
}

#mmp-options-title {
  background: #ffba00 none repeat scroll 0 0;
    color: #fff;
    
    font-size: 42px;
    font-weight: 400;
    margin: -40px -8% 40px;
    padding: 40px;
    text-align: center;
    text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.1);
}

#hed3 {
  display: none;
}

.accordion {
  display: none;
  border-bottom: 1px solid #ddd;
  padding-bottom: 10px;
}

.accordion.active {
  display: block;
}

.submit .button-primary {
  width: 30%;
  height: 50px;
  font-size: 20px;
  -webkit-font-smoothing: antialiased;
  font-weight: bold;
}