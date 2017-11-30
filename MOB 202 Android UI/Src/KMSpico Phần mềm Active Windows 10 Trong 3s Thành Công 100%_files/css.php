@charset "UTF-8";

/* --- xenforo.css --- */

/*
 * YUI reset-fonts.css
 *
Copyright (c) 2009, Yahoo! Inc. All rights reserved.
Code licensed under the BSD License:
http://developer.yahoo.net/yui/license.txt
version: 2.7.0
*/
html{color:#000;background:#FFF;}body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,code,form,fieldset,legend,input,button,textarea,p,blockquote,th,td{margin:0;padding:0;}table{border-collapse:collapse;border-spacing:0;}fieldset,img{border:0;}address,caption,cite,code,dfn,em,strong,th,var,optgroup{font-style:inherit;font-weight:inherit;}del,ins{text-decoration:none;}li{list-style:none;}caption,th{text-align:left;}h1,h2,h3,h4,h5,h6{font-size:100%;font-weight:normal;}q:before,q:after{content:'';}abbr,acronym{border:0;font-variant:normal;text-decoration:none}sup{vertical-align:baseline;}sub{vertical-align:baseline;}legend{color:#000;}input,button,textarea,select,optgroup,option{font-family:inherit;font-size:inherit;font-style:inherit;font-weight:inherit;}input,button,textarea,select{*font-size:100%;}body{font:13px/1.231 arial,helvetica,clean,sans-serif;*font-size:small;*font:x-small;}select,input,button,textarea,button{font:99% arial,helvetica,clean,sans-serif;}table{font-size:inherit;font:100%;}pre,code,kbd,samp,tt{font-family:monospace;*font-size:108%;line-height:100%;}

/*
 * Firefox broken image placeholder support.
 *
http://lab.gmtplusone.com/image-placeholder/
*/ 
img:-moz-broken, img:-moz-user-disabled { -moz-force-broken-image-icon: 1; }
img:-moz-broken:not([width]), img:-moz-user-disabled:not([width]) { width: 50px; }
img:-moz-broken:not([height]), img:-moz-user-disabled:not([height]) { height: 50px; }

/*
 * XenForo Core CSS
 *
 */

html
{
	color: rgb(21, 25, 34);

	overflow-y: scroll !important;
}

body
{
	-webkit-text-size-adjust: 100%;
	-moz-text-size-adjust: 100%;
	-ms-text-size-adjust: 100%;
	text-size-adjust: 100%;

	font-family: Arial, Helvetica, sans-serif;
color: rgb(21, 25, 34);
;
word-wrap: break-word;
line-height: 1.28;

}

/* counteract the word-wrap setting in 'body' */
pre, textarea
{
	word-wrap: normal;
}

[dir=auto] { text-align: left; }

a:link,
a:visited
{
	color: rgb(0, 30, 125);
text-decoration: none;

}

	a[href]:hover
	{
		text-decoration: underline;

	}
	
	a:hover
	{
		_text-decoration: underline;
	}
	
	a.noOutline
	{
		outline: 0 none;
	}
	
	.emCtrl,
	.messageContent a
	{
		border-radius: 5px;
	}
	
		.emCtrl:hover,
		.emCtrl:focus,
		.ugc a:hover,
		.ugc a:focus
		{
			/*position: relative;
			top: -1px;*/
			text-decoration: none;
			box-shadow: 5px 5px 7px #CCCCCC;
			outline: 0 none;
		}
		
			.emCtrl:active,
			.ugc a:active
			{
				position: relative;
				top: 1px;
				box-shadow: 2px 2px 7px #CCCCCC;
				outline: 0 none;
			}

	.ugc a:link,
	.ugc a:visited
	{
		padding: 0 3px;
margin: 0 -3px;
border-radius: 5px;

	}
	
		.ugc a:hover,
		.ugc a:focus
		{
			color: #6d3f03;
background: #fff4e5 url('styles/brivium/NamChelsea/xenforo/gradients/category-23px-light.png') repeat-x top;

		}
		
img.mceSmilie,
img.mceSmilieSprite
{
	vertical-align: text-bottom;
	margin: 0 1px;
}
		
/** title bar **/

.titleBar
{
	margin-bottom: 10px;
}

/* clearfix */ .titleBar { zoom: 1; } .titleBar:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

.titleBar h1
{
	font-size: 20px;
color: #000000;
font-weight: 600;
overflow: hidden;
zoom: 1;

	display: inline-block;
}

	.titleBar h1 em
	{
		color: rgb(40, 40, 40);
	}
		
	.titleBar h1 .Popup
	{
		float: left;
	}

#pageDescription
{
	font-size: 9pt;
margin-top: 2px;

}

.topCtrl
{
	float: right;
	display: inline-table;
}
	
	.topCtrl h2
	{
		font-size: 12pt;
	}
		
/** images **/

img
{
	-ms-interpolation-mode: bicubic;
}

a.avatar 
{ 
	*cursor: pointer; /* IE7 refuses to do this */ 
	display: block;
	position: relative;
} 

.avatar img,
.avatar .img,
.avatarCropper
{
	background-color: rgb(255, 255, 255);
padding: 2px;
margin: auto;
border: 1px solid #d0dae4;

}

.avatar.plainImage img,
.avatar.plainImage .img
{
}

	.avatar .img
	{
		display: block;
		background-repeat: no-repeat;
		/*background-position: 2px 2px;*/
		text-indent: 1000px;
		overflow: hidden;
		white-space: nowrap;
		word-wrap: normal;
	}

	.avatar .img.s { width: 48px;  height: 48px;  }
	.avatar .img.m { width: 96px;  height: 96px;  }
	.avatar .img.l { width: 192px; height: 192px; }
	
	.avatar span.img.s,
	.avatar span.img.m,
	.avatar span.img.l
	{
		background-position: 2px 2px;
	}

.avatarCropper
{
	width: 192px;
	height: 192px;
	direction: ltr;
}

.avatarCropper a,
.avatarCropper span,
.avatarCropper label
{
	overflow: hidden;
	position: relative;
	display: block;
	width: 192px;
	height: 192px;
}

.avatarCropper img
{
	padding: 0;
	border: none;
	border-radius: 0;

	position: relative;
	display: block;
}

.avatarScaler img
{
	max-width: 192px;
	_width: 192px;
	border-radius: 2px;
}

/* ***************************** */

body .dimmed, body a.dimmed, body .dimmed a { color: rgb(222, 222, 222); }
body .muted, body a.muted, body .muted a { color: rgb(150,150,150); }
body .faint, body a.faint, body .faint a { color: rgb(150,150,150); }

.highlight { font-weight: bold; }

.concealed,
.concealed a,
.cloaked,
.cloaked a
{
	text-decoration: inherit !important;
	color: inherit !important;
	*clear:expression( style.color = parentNode.currentStyle.color, style.clear = "none", 0);
}

a.concealed:hover,
.concealed a:hover
{
	text-decoration: underline !important;
}

/* ***************************** */

.xenTooltip
{
	font-size: 11px;
color: #ffffff;
background-color: #a1c71f;
padding: 5px 10px;
border-radius: 3px;
display: none;
z-index: 15000;
cursor: default;

}

.xenTooltip a,
.xenTooltip a:hover
{
	color: #ffffff;
	text-decoration: underline;
}

	.xenTooltip .arrow
	{
		border-top: 6px solid #a1c71f;
border-right: 6px solid transparent;
border-bottom: 1px none black;
border-left: 6px solid transparent;
position: absolute;
bottom: -6px;
line-height: 0px;
width: 0px;
height: 0px;

		left: 9px;
		
		/* Hide from IE6 */
		_display: none;
	}

	.xenTooltip.flipped .arrow
	{
		left: auto;
		right: 9px;
	}

.xenTooltip.statusTip
{
	/* Generated by XenForo.StatusTooltip JavaScript */
	padding: 5px 10px;
line-height: 17px;
width: 250px;
height: auto;

}

	.xenTooltip.statusTip .arrow
	{
		border: 6px solid transparent;
border-right-color: #a1c71f;
border-left: 1px none #a1c71f;
top: 6px;
left: -6px;
bottom: auto;
right: auto;

	}
			
.xenTooltip.iconTip { margin-left: -6px; }
.xenTooltip.iconTip.flipped { margin-left: 7px; }

/* ***************************** */

#PreviewTooltip
{
	display: none;
}

.xenPreviewTooltip
{
	border: 10px solid #032A46;
border-radius: 10px;
position: relative;
box-shadow: 0px 12px 25px rgba(0,0,0, 0.5);
width: 400px;

	
	display: none;	
	z-index: 15000;
	cursor: default;
	
	border-color:  rgb(3, 42, 70); border-color:  rgba(3, 42, 70, 0.5); _border-color:  rgb(3, 42, 70);
}

	.xenPreviewTooltip .arrow
	{
		border-top:  15px solid rgb(3,42,70); border-top:  15px solid rgba(3,42,70, 0.25); _border-top:  15px solid rgb(3,42,70);
border-right: 15px solid transparent;
border-bottom: 1px none black;
border-left: 15px solid transparent;
position: absolute;
bottom: -15px;
left: 22px;

		
		_display: none;
	}
	
		.xenPreviewTooltip .arrow span
		{
			border-top: 15px solid rgb(255, 255, 255);
border-right: 15px solid transparent;
border-bottom: 1px none black;
border-left: 15px solid transparent;
position: absolute;
top: -17px;
left: -15px;

		}

	.xenPreviewTooltip .section,
	.xenPreviewTooltip .sectionMain,
	.xenPreviewTooltip .primaryContent,
	.xenPreviewTooltip .secondaryContent
	{
		margin: 0;
	}
	
		.xenPreviewTooltip .previewContent
		{
			overflow: hidden; zoom: 1;
			min-height: 1em;
		}

/* ***************************** */

.importantMessage
{
	margin: 10px 0;
	color: #6d3f03;
	background-color: #fff4e5;
	text-align: center;
	padding: 5px;
	border-radius: 5px;
	border: solid 1px #f9bc6d;
}

.importantMessage a
{
	font-weight: bold;
	color: #6d3f03;
}

/* ***************************** */

.section
{
	margin: 0 auto 18px;

}

.sectionMain
{
	background-color: rgb(255, 255, 255);
padding: 10px;
margin: 0 auto;

}

.forum_list .sectionMain
{
	background: transparent;
	border: 0;
	padding: 0;
	margin-bottom: 18px;
}

.forum_list .sectionMain .nodeList
{
	border: 1px solid rgb(222, 230, 238);
	border-top: 0;
	border-radius: 0 0 2px 2px;
}

.forum_view #forums
{
	border: 1px solid rgb(222, 230, 238);
}

.category_view .sectionMain
{
	border: 1px solid rgb(222, 230, 238);
}

.heading,
.xenForm .formHeader
{
	font-size: 14px;
color: #ffffff;
background-color: rgb(31, 95, 161);
padding: 7px 10px;
margin-bottom: 3px;
border-bottom: 1px solid rgb(31, 95, 161);
border-top-left-radius: 3px;
border-top-right-radius: 3px;
font-weight: 600;

}

	.heading a { color: #ffffff; }

.subHeading
{
	font-size: 14px;
color: rgb(31, 95, 161);
background-color: rgb(234, 240, 246);
padding: 11px 15px;
margin: 0;
border: 1px solid rgb(222, 230, 238);
border-left: 2px solid rgb(31, 95, 161);
box-sizing: border-box;

}

	.subHeading a { color: rgb(31, 95, 161); }

.textHeading,
.xenForm .sectionHeader
{
	color: rgb(40, 40, 40);
padding-bottom: 2px;
margin: 10px auto 5px;
border-bottom: 1px solid rgb(222, 230, 238);
font-weight: 600;

}

.error_with_login .xenForm .submitUnit
{
	padding-top: 10px;
}

.error_with_login .textHeading,
.error_with_login .xenForm .sectionHeader
{
	padding-bottom: 5px;
}

.error_with_login a:link,
.error_with_login a:visited
{
	color: rgb(150,150,150);
}

.insideSidebar .textHeading,
.insideSidebar .xenForm .sectionHeader
{
	border-bottom: 1px solid rgb(222, 230, 238);
}

.profileContent .textHeading
{
	border-bottom: 1px solid rgb(222, 230, 238);
}

.xenForm .sectionHeader,
.xenForm .formHeader
{
	margin: 10px 0;
}

.primaryContent > .textHeading:first-child,
.secondaryContent > .textHeading:first-child
{
	margin-top: 0;
}

.larger.textHeading,
.xenForm .sectionHeader
{
	color: rgb(40, 40, 40);
	font-size: 14px;
	margin-bottom: 6px;
}

	.larger.textHeading a,
	.xenForm .sectionHeader a
	{
		color: rgb(196, 225, 255);
	}

.primaryContent
{
	background-color: rgb(255, 255, 255);
padding: 10px;
border-bottom: 1px solid rgb(222, 230, 238);

}

.discussionList.sectionMain .primaryContent
{
	border-bottom: 0;
}

	.primaryContent a
	{
		color: @crgb(48, 51, 204);

	}

.secondaryContent
{
	background-color: rgb(255, 255, 255);
padding: 10px;
border-bottom: 1px solid rgb(222, 230, 238);

}

	.secondaryContent a
	{
		color: rgb(31, 95, 161);

	}

.sectionFooter
{
	overflow: hidden; zoom: 1;
	font-size: 9pt;
color: rgb(40, 40, 40);
background-color: #e7f3ff;
padding: 4px 10px;
margin: 10px;
border: 1px solid #dfe8f0;
border-radius: 2px;
line-height: 16px;

}

	.sectionFooter a { color: rgb(40, 40, 40); }

	.sectionFooter .left
	{
		float: left;
	}

	.sectionFooter .right
	{
		float: right;
	}

/* used for section footers with central buttons, esp. in report viewing */

.actionList
{
	text-align: center;
}

/* left-right aligned options */

.opposedOptions
{
	overflow: hidden; zoom: 1;
}
	
	.opposedOptions .left
	{
		float: left;
	}
	
	.opposedOptions .right
	{
		float: right;
	}

.columns
{
	overflow: hidden; zoom: 1;
}

	.columns .columnContainer
	{
		float: left;
	}
	
		.columns .columnContainer .column
		{
			margin-left: 3px;
		}
		
		.columns .columnContainer:first-child .column
		{
			margin-left: 0;
		}

.c50_50 .c1,
.c50_50 .c2 { width: 49.99%; }

.c70_30 .c1 { width: 70%; }
.c70_30 .c2 { width: 29.99%; }

.c60_40 .c1 { width: 60%; }
.c60_40 .c2 { width: 39.99%; }

.c40_30_30 .c1 { width: 40%; }
.c40_30_30 .c2,
.c40_30_30 .c3 { width: 29.99%; }

.c50_25_25 .c1 { width: 50%; }
.c50_25_25 .c2,
.c50_25_25 .c3 { width: 25%; }

/* ***************************** */
/* Basic Tabs */

.tabs
{
	font-size: 9pt;
padding: 0 10px;
border-bottom: 1px solid rgb(222, 230, 238);
word-wrap: normal;
min-height: 23px;
_height: 23px;
/*background: rgb(222, 230, 238) url('styles/brivium/NamChelsea/xenforo/gradients/form-button-white-25px.png') repeat-x top;*/

	
	display: table;
	width: 100%;
	*width: auto;
	box-sizing: border-box;
}

.tabs li
{
	float: left;
	margin: 0 1px;
}

.tabs li a,
.tabs.noLinks li
{
	color: rgb(40, 40, 40);
text-decoration: none;
padding: 0 8px;
margin-right: -1px;
margin-bottom: -1px;
border: 1px solid rgb(222, 230, 238);
border-top-left-radius: 5px;
border-top-right-radius: 5px;
display: inline-block;
line-height: 22px;
cursor: pointer;
outline: 0 none;
white-space: nowrap;
word-wrap: normal;
height: 22px;
	
	background: linear-gradient(#F2F2F2, #FFFFFF);
}

.tabs li:hover a,
.tabs.noLinks li:hover
{
	text-decoration: none;
background-color: rgb(196, 225, 255);
		
}

.tabs li.active a,
.tabs.noLinks li.active
{
	color: #ffffff;
border: 1px solid rgb(31, 95, 161);

	background: rgb(31, 95, 161);
}

/* Tabs inside forms */

.xenForm .tabs,
.xenFormTabs
{
	padding: 5px 0px 0;
}


@media (max-width:480px)
{
	.Responsive .tabs
	{
		padding: 0;
	}
	
	.Responsive .tabs li
	{
		float: none;
	}

	.Responsive .tabs li a,
	.Responsive .tabs.noLinks li
	{
		display: block;
	}
	
	.Responsive .tabs
	{
		display: flex;
		display: -webkit-flex;
		flex-wrap: wrap;
		-webkit-flex-wrap: wrap;
	}
	
	.Responsive .tabs li
	{
		flex-grow: 1;
		-webkit-flex-grow: 1;
		text-align: center;
	}
	
	.Responsive .xenForm .tabs,
	.Responsive .xenFormTabs
	{
		padding-left: 0px;
		padding-right: 0px;
	}
}


/* ***************************** */
/* Popup Menus */

.Popup
{
	position: relative;
}

	.Popup.inline
	{
		display: inline;
	}
	
/** Popup menu trigger **/

.Popup .arrowWidget
{
	/* circle-arrow-down */
	background: transparent url('styles/brivium/NamChelsea/xenforo/xenforo-ui-sprite.png') no-repeat -32px 0;
margin-top: 0;
margin-left: 2px;
*

			*

	*

	*

	*

			*

	*

	*
display: inline-block;
*margin-top: 0;
vertical-align: middle;
width: 13px;
height: 14px;

}

.thread_view .Popup .arrowWidget
{
	background: transparent url('styles/brivium/NamChelsea/xenforo/xenforo-ui-sprite.png') no-repeat -64px 0;
}

.PopupOpen .arrowWidget
{
	/* circle-arrow-up */
	background-position: -16px 0;

}

.thread_view .PopupOpen .arrowWidget
{
	background-position: -48px 0;
}

.Popup .PopupControl,
.Popup.PopupContainerControl
{
	display: inline-block;
	cursor: pointer;
}

	.Popup .PopupControl:hover,
	.Popup.PopupContainerControl:hover
	{
		color: rgb(21, 25, 34);
text-decoration: none;

	}

	.Popup .PopupControl:focus,
	.Popup .PopupControl:active,
	.Popup.PopupContainerControl:focus,
	.Popup.PopupContainerControl:active
	{
		outline: 0;
	}
	
	.Popup .PopupControl.PopupOpen,
	.Popup.PopupContainerControl.PopupOpen
	{
		/*color: rgb(150,150,150);
		background-color: #2672c0;
		border-bottom-right-radius: 0px;
		border-bottom-left-radius: 0px;
		_color: rgb(150,150,150);
		*/
/*text-shadow: 1px 1px 2px white;
		border-top-left-radius: 3px;
		border-top-right-radius: 3px;*/

	}
	
	.Popup .PopupControl.PopupOpen a,
	.Popup.PopupContainerControl.PopupOpen a
	{
		color: rgb(196, 225, 255);
	}	
	
	.member_view .Popup .PopupControl.PopupOpen,
	.member_view .Popup.PopupContainerControl.PopupOpen
	{
		background: rgb(161, 199, 31);
	}	
	
	.Popup .PopupControl.BottomControl.PopupOpen,
	.Popup.PopupContainerControl.BottomControl.PopupOpen
	{
	}
		
		.Popup .PopupControl.PopupOpen:hover,
		.Popup.PopupContainerControl.PopupOpen:hover
		{
			text-decoration: none;
		}
		
/** Menu body **/

.Menu
{
	background-color: #ffffff;
	
	font-size: 10pt;
overflow: hidden;
box-shadow: 0px 5px 5px rgba(0,0,0, 0.5);

	margin-top: 1px;
	border-radius: 2px;
	border-bottom: 0;
	min-width: 200px;
	*width: 200px;
	
	/* makes menus actually work... */
	position: absolute;
	z-index: 7500;
	display: none;
}

/* allow menus to operate when JS is disabled */
.Popup:hover .Menu
{
	display: block;
}

.Popup:hover .Menu.JsOnly
{
	display: none;
}

.Menu.BottomControl
{
	border: 0;
	box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
}

	.Menu > li > a,
	.Menu .menuRow
	{
		display: block;
	}
	
.Menu.inOverlay
{
	z-index: 10000;
}
		
/* Menu header */

.Menu .menuHeader
{
	overflow: hidden; zoom: 1;
}

.Menu .menuHeader h3
{
	font-size: 13pt;

}

.Menu .menuHeader .muted
{
	font-size: 11px;

}

/* Standard menu sections */

.Menu .primaryContent
{
	background-color: rgba(255, 255, 255, 0.96);
}

.Menu .secondaryContent
{
	background-color: rgba(255, 255, 255, 0.96);
}

.Menu .sectionFooter
{
	background-color: rgb(255, 255, 255);
	border: none;
	margin: 0;
	padding: 10px;
}

/* Links lists */

.Menu .blockLinksList
{	
	max-height: 400px;
	overflow: auto;
}

/* form popups */

.formPopup
{
	width: 266px;
	background-color: rgb(255, 255, 255);
	border-radius: 2px;
}

	.formPopup form,
	.formPopup .ctrlUnit
	{
		margin: 5px;
	}
	
		.formPopup .ctrlUnit
		{
		}
		
	.formPopup .textCtrl,
	.formPopup .button
	{
	}
		
	.formPopup .ctrlUnit > dt label
	{
		display: block;
		margin-bottom: 2px;
	}
		
	.formPopup .submitUnit dd
	{
		text-align: center;
	}
	
		.formPopup .ctrlUnit > dd .explain
		{
			margin: 2px 0 0;
		}
	
	.formPopup .primaryControls
	{
		zoom: 1;
		white-space: nowrap;
		word-wrap: normal;
	}
	
		.formPopup .primaryControls input.textCtrl
		{
			background: url('styles/brivium/NamChelsea/extra/icon-search.png') 10px center no-repeat;
			border: 0;
			color: rgb(109, 109, 120);
			width: 230px;
			height: 20px;
			padding: 5px 6px 5px 30px;
			font-size: 14px;
			margin-bottom: 0;
			line-height: 20px;
		}
	
		.formPopup .secondaryControls
		{
			padding: 0 5px 5px;
		}
	
		.formPopup .controlsWrapper
		{
			/*background: rgb(37, 44, 59) url('styles/brivium/NamChelsea/xenforo/gradients/category-23px-light.png') repeat-x top;*/
			border-radius: 5px;
			padding: 0;
			margin: 5px 0;
			font-size: 11px;
		}

			.formPopup .controlsWrapper .textCtrl
			{
				width: 235px;
			}
	
	.formPopup .advSearchLink
	{
		display: block;
		text-align: center;
		padding: 5px;
		font-size: 11px;
		border-radius: 5px;
		border: 1px solid rgb(37, 44, 59);
		background: rgb(222, 230, 238) url('styles/brivium/NamChelsea/xenforo/gradients/category-23px-light.png') repeat-x top;
	}
	
		.formPopup .advSearchLink:hover
		{
			background-color: rgb(37, 44, 59);
			text-decoration: none;
		}

/* All overlays must have this */
.xenOverlay
{
	display: none;
	z-index: 10000;
	width: 90%;
	box-sizing: border-box;
	max-width: 690px; /*calc: 90=overlay padding+borders*/
	border-radius: 8px 8px 3px 3px;
}

	.xenOverlay .overlayScroll
	{
		max-height: 400px;
		overflow: auto;
	}
	
	.xenOverlay .overlayScroll.ltr
	{
		direction: ltr;
	}
	
	.xenOverlay .overlayScroll .sortable-placeholder
	{
		background-color: rgb(196, 225, 255);
	}
	
	.xenOverlay .overlayContain
	{
		overflow-x: auto;
	}
	
	.xenOverlay .overlayContain.ltr
	{
		direction: ltr;
	}

.overlayOnly /* needs a bit more specificity over regular buttons */
{
	display: none !important;
}

	.xenOverlay .overlayOnly
	{
		display: block !important;
	}
	
	.xenOverlay input.overlayOnly,
	.xenOverlay button.overlayOnly,
	.xenOverlay a.overlayOnly
	{
		display: inline !important;
	}
	
	.xenOverlay a.close 
	{
		background-image: url('styles/brivium/NamChelsea/xenforo/overlay/close.png');
position: absolute;
right: 4px;
top: 0;
cursor: pointer;
width: 35px;
height: 35px;

	}

/* Generic form overlays */

.xenOverlay .formOverlay
{
	color: rgb(40, 40, 40);
background-color: rgb(255, 255, 255);
padding: 10px;
border-top-left-radius: 5px;
border-top-right-radius: 5px;
border-bottom-right-radius: 3px;
border-bottom-left-radius: 3px;
_zoom: 1;

	margin: 0;
}

	.Touch .xenOverlay .formOverlay
	{
		background: rgb(255, 255, 255);
		box-shadow: none;
	}

	.xenOverlay .formOverlay a.muted,
	.xenOverlay .formOverlay .muted a
	{
		color: rgb(150,150,150);
	}

	.xenOverlay .formOverlay .heading
	{
		font-size: 12pt;
color: #ffffff;
background-color: rgb(31, 95, 161);
padding: 7px 10px;
margin: -10px -10px 10px;
border: 0 none black;
font-weight: 600;

	}

	.xenOverlay .formOverlay .subHeading
	{
		font-weight: bold;
font-size: 11px;
color: rgb(222, 230, 238);
background-color: #2b485c;
padding: 7px 10px;
margin: 0 10px 10px;
border: 1px solid rgb(21, 25, 34);
border-radius: 3px;

	}
	
	.xenOverlay .formOverlay .textHeading, .xenOverlay .formOverlay .xenForm .sectionHeader
	{
		border-bottom: 0;
	}
	
	.xenOverlay .AvatarEditor .heading
	{
		border-radius: 3px 3px 0 0;
	}
	
	.xenOverlay .AvatarEditor.formOverlay
	{
		border-radius: 4px 4px 3px 3px; /*have overflow: auto */
	}
	
	.xenOverlay .formOverlay .textHeading
	{
		
	}
	
	.xenOverlay .formOverlay > p
	{
		padding-left: 10px;
		padding-right: 10px;
	}

	.xenOverlay .formOverlay .textCtrl
	{
		color: #000000;
background-color: rgb(255, 255, 255);
border-color: rgb(233, 237, 238);

	}

	.xenOverlay .formOverlay .textCtrl option
	{
		background-color: rgb(255, 255, 255);
	}

	.xenOverlay .formOverlay .textCtrl:focus,
	.xenOverlay .formOverlay .textCtrl.Focus
	{
		background: rgb(255,255,240) url('styles/brivium/NamChelsea/xenforo/gradients/form-element-focus-25.png') repeat-x;

	}

	.xenOverlay .formOverlay .textCtrl:focus option
	{
		background: rgb(255,255,240) url('styles/brivium/NamChelsea/xenforo/gradients/form-element-focus-25.png') repeat-x;
	}

	.xenOverlay .formOverlay .textCtrl.disabled
	{
		background: url(rgba.php?r=0&g=0&b=0&a=63); background: rgba(0,0,0, 0.25); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#3F000000,endColorstr=#3F000000);

	}

	.xenOverlay .formOverlay .textCtrl.disabled option
	{
		background: url(rgba.php?r=0&g=0&b=0&a=63); background: rgba(0,0,0, 0.25); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#3F000000,endColorstr=#3F000000);
	}

	.xenOverlay .formOverlay .textCtrl.prompt
	{
		color: rgb(160,160,160);

	}

	.xenOverlay .formOverlay .ctrlUnit > dt dfn,
	.xenOverlay .formOverlay .ctrlUnit > dd li .hint,
	.xenOverlay .formOverlay .ctrlUnit > dd .explain
	{
		color: rgb(150,150,150);

	}

	.xenOverlay .formOverlay a
	{
		color: rgb(31, 95, 161);

	}

		.xenOverlay .formOverlay a.button
		{
			color: #fff;

		}

	.xenOverlay .formOverlay .avatar img,
	.xenOverlay .formOverlay .avatar .img,
	.xenOverlay .formOverlay .avatarCropper
	{
		background-color: transparent;
	}
	
	/* tabs in form overlay */
	
	.xenOverlay .formOverlay .tabs /* the actual tabs */
	{
		background: transparent none;
border-color: rgb(196, 225, 255);

	}

		.xenOverlay .formOverlay .tabs a
		{
			background: transparent none;
border-color: rgb(196, 225, 255);
background: linear-gradient(#F2F2F2, #FFFFFF);

		}
		
			.xenOverlay .formOverlay .tabs a:hover
			{
				background: url(rgba.php?r=255&g=255&b=255&a=63); background: rgba(255,255,255, 0.25); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#3FFFFFFF,endColorstr=#3FFFFFFF);

			}
			
			.xenOverlay .formOverlay .tabs .active a
			{
				background-color: black;

			}
			
	.xenOverlay .formOverlay .tabPanel /* panels switched with the tab controls */
	{
		background: transparent url('styles/brivium/NamChelsea/xenforo/color-picker/panel.png') repeat-x top;
border: 1px solid rgb(196, 225, 255);

	}


/* Generic overlays */

.xenOverlay .section,
.xenOverlay .sectionMain
{
	padding: 0px;
/*border: 20px solid #032A46;
	border-radius: 20px;
	box-shadow: 0px 25px 50px rgba(0,0,0, 0.5);*/

	
	border-color: ;
}

	.Touch .xenOverlay .section,
	.Touch .xenOverlay .sectionMain
	{
		border-color: ;
		box-shadow: none;
	}

.xenOverlay > .section,
.xenOverlay > .sectionMain
{
	background: none;
	margin: 0;
}

	.xenOverlay .section .heading,
	.xenOverlay .sectionMain .heading
	{
		margin-bottom: 0;
	}

	.xenOverlay .section .subHeading,
	.xenOverlay .sectionMain .subHeading
	{
		margin: 0 !important;
		/*background: rgb(255, 255, 255);*/
		box-sizing: border-box;
		color: rgb(21, 25, 34);
	}

	.xenOverlay .section .sectionFooter,
	.xenOverlay .sectionMain .sectionFooter
	{
		overflow: hidden; zoom: 1;
		background: #fff;
		border: 0;
		border-radius: 0 0 3px 3px;
		margin: 0;
		padding: 10px;
	}
		
		.xenOverlay .sectionFooter .buttonContainer
		{
			line-height: 31px;
		}
	
		.xenOverlay .sectionFooter .button,
		.xenOverlay .sectionFooter .buttonContainer
		{
			min-width: 75px;
			*min-width: 0;
			float: right;
			margin-left: 5px;
		}
		
			.xenOverlay .sectionFooter .buttonContainer .button
			{
				float: none;
				margin-left: 0;
			}

/* The AJAX progress indicator overlay */

#AjaxProgress.xenOverlay
{
	width: 100%;
	max-width: none;
	overflow: hidden; zoom: 1;
}

	#AjaxProgress.xenOverlay .content
	{
		background: rgb(0, 0, 0) url('styles/brivium/NamChelsea/xenforo/widgets/ajaxload.info_FFFFFF_facebook.gif') no-repeat center center; background: rgba(0,0,0, 0.5) url('styles/brivium/NamChelsea/xenforo/widgets/ajaxload.info_FFFFFF_facebook.gif') no-repeat center center;
border-bottom-left-radius: 10px;
float: right;
width: 85px;
height: 30px;

	}
	
		.Touch #AjaxProgress.xenOverlay .content
		{
			background-color: rgb(0, 0, 0);
		}

/* Timed message for redirects */

.xenOverlay.timedMessage
{
	color: black;
background: transparent url('styles/brivium/NamChelsea/xenforo/overlay/timed-message.png') repeat-x;
border-bottom: 1px solid black;
max-width: none;
width: 100%;

}

	.xenOverlay.timedMessage .content
	{
		font-size: 18pt;
padding: 30px;
text-align: center;

	}
	
/* Growl-style message */

#StackAlerts
{
	position: fixed;
	bottom: 70px;
	left: 35px;
	z-index: 9999; /* in front of the expose mask */
}

	#StackAlerts .stackAlert
	{
		position: relative;
		width: 270px;
		border: 1px solid rgb(97, 177, 236);
		border-radius: 5px;
		box-shadow: 2px 2px 5px 0 rgba(0,0,0, 0.4);
		margin-top: 5px;
	}

		#StackAlerts .stackAlertContent
		{
			padding: 10px;
			padding-right: 30px;
			border-radius: 4px;
			border: solid 2px rgb(37, 44, 59);
			background: url(rgba.php?r=222&g=230&b=238&a=229); background: rgba(222, 230, 238, 0.9); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#E5DEE6EE,endColorstr=#E5DEE6EE);
			font-size: 11px;
			font-weight: bold;
		}
	
/* Inline Editor */

.xenOverlay .section .messageContainer
{
	padding: 0;
	border-bottom: 0;
}

.xenOverlay .section .messageContainer .mceLayout
{
	border: none;	
}

.xenOverlay .section .messageContainer tr.mceFirst td.mceFirst
{
	border-top: none;
}

.xenOverlay .section .messageContainer tr.mceLast td.mceLast,
.xenOverlay .section .messageContaner tr.mceLast td.mceIframeContainer
{
	border-bottom: none;
}

.xenOverlay .section .textCtrl.MessageEditor,
.xenOverlay .section .mceLayout,
.xenOverlay .section .bbCodeEditorContainer textarea
{
	width: 100% !important;
	min-height: 260px;
	_height: 260px;
	box-sizing: border-box;
}


@media (max-width:610px)
{
	.Responsive .xenOverlay
	{
		width: 100%;
	}
	
	.Responsive .xenOverlay .formOverlay,
	.Responsive .xenOverlay .section,
	.Responsive .xenOverlay .sectionMain
	{
		border-radius: 10px;
		border-width: 10px;
	}
	
	.Responsive .xenOverlay a.close 
	{
		top: 0;
		right: 0;
		width: 28px;
		height: 28px;
		background-size: 100% 100%;
	}
}


.alerts .alertGroup
{
	margin-bottom: 20px;
}

.alerts .primaryContent
{
	overflow: hidden; zoom: 1;
	padding: 10px 0;
}

.alerts .avatar
{
	float: left;
}

.alerts .avatar img
{
	width: 32px;
	height: 32px;
}

.alerts .alertText
{
	margin-left: 50px;
	padding: 0;
}

.alerts h3
{
	display: inline;
}

.alerts h3 .subject
{
	font-weight: 600;
}

.alerts .timeRow
{
	font-size: 11px;
	margin-top: 5px;
}
	
	.alerts .newIcon,
	.alertsPopup .newIcon
	{
		display: inline-block;
		vertical-align: baseline;
		margin-left: 2px;
		width: 11px;
		height: 11px;
		background: url('styles/brivium/NamChelsea/xenforo/xenforo-ui-sprite.png') no-repeat -144px -40px;
	}

/** Data tables **/

.dataTableWrapper
{
	overflow-x: auto;
	overflow-y: visible;
}

table.dataTable
{
	width: 100%;
	_width: 99.5%;
	margin: 10px 0;
}

.dataTable caption
{
	font-size: 14px;
color: #ffffff;
background-color: rgb(31, 95, 161);
padding: 7px 10px;
margin-bottom: 3px;
border-bottom: 1px solid rgb(31, 95, 161);
border-top-left-radius: 3px;
border-top-right-radius: 3px;
font-weight: 600;

}

.dataTable tr.dataRow td
{
	border-bottom: 1px solid rgb(37, 44, 59);
	padding: 5px 10px;
	word-wrap: break-word;
}

.dataTable tr.dataRow td.secondary
{
	background: rgb(222, 230, 238) url("styles/brivium/NamChelsea/xenforo/gradients/category-23px-light.png") repeat-x top;
}

.dataTable tr.dataRow th
{
	background: rgb(234, 240, 246) url("styles/brivium/NamChelsea/xenforo/gradients/category-23px-light.png") repeat-x top;
	border-bottom: 1px solid #f9bc6d;
	border-top: 1px solid rgb(234, 240, 246);
	color: #6d3f03;
	font-size: 11px;
	padding: 5px 10px;
}

	.dataTable tr.dataRow th a
	{
		color: inherit;
		text-decoration: underline;
	}

.dataTable .dataRow .dataOptions
{
	text-align: right;
	white-space: nowrap;
	word-wrap: normal;
	padding: 0;
}

.dataTable .dataRow .important,
.dataTable .dataRow.important
{
	font-weight: bold;
}

.dataTable .dataRow .dataOptions a.secondaryContent
{
	display: inline-block;
	border-left: 1px solid rgb(37, 44, 59);
	border-bottom: none;
	padding: 7px 10px 6px;
	font-size: 11px;
}

	.dataTable .dataRow .dataOptions a.secondaryContent:hover
	{
		background-color: rgb(37, 44, 59);
		text-decoration: none;
	}

	.dataTable .dataRow .delete
	{
		padding: 0px;
		width: 26px;
		border-left: 1px solid rgb(37, 44, 59);
		background-color: rgb(255, 255, 255);
	}	
				
		.dataTable .dataRow .delete a
		{
			display: block;
			background: transparent url('styles/brivium/NamChelsea/xenforo/permissions/deny.png') no-repeat center center;
			cursor: pointer;
		
			padding: 5px;
			width: 16px;
			height: 16px;
			
			overflow: hidden;
			white-space: nowrap;
			text-indent: -1000px;
		}

.memberListItem
{
	overflow: hidden;
zoom: 1;

}

	.memberListItem .avatar,
	.memberListItem .icon
	{
		float: left;

	}
	
	/* ----------------------- */
	
	.memberListItem .extra
	{
		font-size: 11px;
float: right;

	}

		.memberListItem .extra .DateTime
		{
			display: block;
		}

		.memberListItem .extra .bigNumber
		{
			font-size: 250%;
			color: rgb(150,150,150);
		}
	
	.memberListItem .member
	{
		margin-left: 65px;

	}
	
	/* ----------------------- */
		
		.memberListItem h3.username
		{
			font-size: 13pt;
margin-bottom: 3px;
font-weight: 600;

		}
			
		.memberListItem .username.guest
		{
			font-style: italic;
font-weight: normal;

		}
	
	/* ----------------------- */
		
		.memberListItem .userInfo
		{
			font-size: 11px;
margin-bottom: 3px;

		}
		
			.memberListItem .userBlurb
			{
				color: rgb(21, 25, 34);
			}
		
				.memberListItem .userBlurb .userTitle
				{
					color: rgb(21, 25, 34);
font-weight: 600;

				}

			.memberListItem .userStats dt,
			.memberListItem .userStats dd
			{
				white-space: nowrap;
			}
				
	
	/* ----------------------- */
		
		.memberListItem .member .contentInfo
		{
			margin-top: 5px;

		}
	
	/* ----------------------- */
	
	
/* extended member list items have a fixed 200px right column */

.memberListItem.extended .extra
{
	width: 200px;
}

.memberListItem.extended .member
{
	margin-right: 210px;
}

/* Styling for hover-dismiss controls */

.DismissParent .DismissCtrl
{
	position: absolute;
	top: 12px;
	right: 5px;
	
	display: block;
	background: transparent url('styles/brivium/NamChelsea/xenforo/xenforo-ui-sprite.png') no-repeat -80px 0;
	color: white;
	width: 15px;
	height: 15px;
	line-height: 15px;
	text-align: center;
	
	opacity: .4;
	-webkit-transition: opacity 0.3s ease-in-out;
	-moz-transition: opacity 0.3s ease-in-out;
	transition: opacity 0.3s ease-in-out;
	
	font-size: 10px;
	
	overflow: hidden;
	white-space: nowrap;
	text-indent: 20000em;
	
	cursor: pointer;
}

	.DismissParent:hover .DismissCtrl,
	.Touch .DismissParent .DismissCtrl
	{
		opacity: 1;
	}
	
		.DismissParent:hover .DismissCtrl:hover
		{
			background-position: -96px 0;
		}
		
			.DismissParent:hover .DismissCtrl:active
			{
				background-position: -112px 0;
			}

/* ***************************** */
/* un-reset, mostly from YUI */

.baseHtml h1
	{ font-size:138.5%; } 
.baseHtml h2
	{ font-size:123.1%; }
.baseHtml h3
	{ font-size:108%; } 
.baseHtml h1, .baseHtml h2, .baseHtml h3
	{  margin:0em 0; } 
.baseHtml h1, .baseHtml h2, .baseHtml h3, .baseHtml h4, .baseHtml h5, .baseHtml h6, .baseHtml strong
	{ font-weight:; } 
.baseHtml abbr, .baseHtml acronym
	{ border-bottom:1px dotted #000; cursor:help; }  
.baseHtml em
	{  font-style:italic; } 
.baseHtml blockquote, .baseHtml ul, .baseHtml ol, .baseHtml dl
	{ margin:1em; } 
.baseHtml ol, .baseHtml ul, .baseHtml dl
	{ margin-left:3em; margin-right:0; } 
.baseHtml ul ul, .baseHtml ul ol, .baseHtml ul dl, .baseHtml ol ul, .baseHtml ol ol, .baseHtml ol dl, .baseHtml dl ul, .baseHtml dl ol, .baseHtml dl dl
	{ margin-top:0; margin-bottom:0; }
.baseHtml ol li
	{ list-style: decimal outside; } 
.baseHtml ul li
	{ list-style: disc outside; } 
.baseHtml ol ul li, .baseHtml ul ul li
	{ list-style-type: circle; }
.baseHtml ol ol ul li, .baseHtml ol ul ul li, .baseHtml ul ol ul li, .baseHtml ul ul ul li
	{ list-style-type: square; }
.baseHtml ul ol li, .baseHtml ul ol ol li, .baseHtml ol ul ol li
	{ list-style: decimal outside; }
.baseHtml dl dd
	{ margin-left:1em; } 
.baseHtml th, .baseHtml td
	{ border:1px solid #000; padding:.5em; } 
.baseHtml th
	{ font-weight:bold; text-align:center; } 
.baseHtml caption
	{ margin-bottom:.5em; text-align:center; } 
.baseHtml p, .baseHtml pre, .baseHtml fieldset, .baseHtml table
	{ margin-bottom:1em; }

.PageNav
{
	font-size: 10pt;
padding: 2px 0;
overflow: hidden;
zoom: 1;
line-height: 22px;
word-wrap: normal;
min-width: 150px;
white-space: nowrap;

	
	margin-bottom: -.5em;
}

	.PageNav .hidden
	{
		display: none;
	}
	
	.PageNav .pageNavHeader,
	.PageNav a,
	.PageNav .scrollable
	{
		display: block;
		float: left;
		margin-right: 10px;
		margin-bottom: .5em;
	}
	
	.PageNav .pageNavHeader
	{
		padding: 0px 10px;
	}

	.PageNav a
	{		
		color: #ffffff;
text-decoration: none;
background-color: rgb(150,150,150);
border-radius: 100%;
text-align: center;
/*border: 1px solid rgb(234, 240, 246);*/

		
		
		width: 22px;
	}
		.PageNav a[rel=start]
		{
			width: 22px !important;
		}

		.PageNav a.text
		{
			width: auto !important;
			padding: 0 4px;
			background:none;
			border-radius: 0;
			color: rgb(40, 40, 40);
		}
		.PageNav a.currentPage
		{
			color: #ffffff;
background-color: rgb(21, 25, 34);
border-color: rgb(97, 177, 236);
position: relative;

		}

		a.PageNavPrev,
		a.PageNavNext
		{
			color: rgb(40, 40, 40);
background-color: transparent;
padding: 1px;
border: 1px none black;
cursor: pointer;

			
			width: 22px !important;
		}
		
		.PageNav a:hover,
		.PageNav a:focus
		{
			color: #ffffff;
text-decoration: none;
background-color: rgb(21, 25, 34);
border-color: #f9bc6d;

		}
		
	.PageNav a.distinct
	{
		margin-left: 10px;
	}
			
	.PageNav .scrollable
	{
		position: relative;
		overflow: hidden;
		width: 150px; /* width of 5 page numbers plus their margin & border */
		height: 22px; /* only needs to be approximate */
	}
	
		.PageNav .scrollable .items
		{
			display: block;
			width: 20000em; /* contains scrolling items, should be huge */
			position: absolute;
			display: block;
		}
		
/** Edge cases - large numbers of digits **/

.PageNav .gt999 
{
	font-size: 9px;
	letter-spacing: -0.05em; 
}

.PageNav.pn5 a { width: 29px; } .PageNav.pn5 .scrollable { width: 185px; }
.PageNav.pn6 a { width: 33px; } .PageNav.pn6 .scrollable { width: 205px; }
.PageNav.pn7 a { width: 37px; } .PageNav.pn7 .scrollable { width: 225px; }


@media (max-width:610px)
{
	.Responsive .PageNav .pageNavHeader
	{
		display: none;
	}
}

@media (max-width:480px)
{
	.Responsive .PageNav .unreadLink
	{
		display: none;
	}
}


/* ***************************** */
/* DL Name-Value Pairs */

.pairs dt,
.pairsInline dt,
.pairsRows dt,
.pairsColumns dt,
.pairsJustified dt
{
	color: rgb(150,150,150);
}

.pairsRows,
.pairsColumns,
.pairsJustified
{
	line-height: 1.5;
}

.pairsInline dl,
.pairsInline dt,
.pairsInline dd
{
	display: inline;
}

.pairsRows dt,
.pairsRows dd
{
	display: inline-block;
	vertical-align: top;

	*display: inline;
	*margin-right: 1ex;
	*zoom: 1;
}

dl.pairsColumns,
dl.pairsJustified,
.pairsColumns dl,
.pairsJustified dl
{
	overflow: hidden; zoom: 1;
}

.attachment dl.pairsColumns,
.attachment dl.pairsJustified,
.attachment .pairsColumns dl,
.attachment .pairsJustified dl
{
	color: #161a24;
}

.attachment .attachmentInfo .filename a
{
	color: #161a24;
	font-size: 13px;
}

.attachment .attachmentInfo dl dt
{
	color: #161a24;
	font-size: 13px;
}

.pairsColumns dt,
.pairsColumns dd
{
	float: left;
	width: 48%;
}

.pairsJustified dt
{
	float: left;
	max-width: 100%;
	margin-right: 5px;
	font-size: 12px;
}
.pairsJustified dd
{
	float: right;
	text-align: right;
	max-width: 100%;
	font-size: 12px;
}

.statsList .pairsJustified dd
{
	color: #1B1B27;
}
.statsList .pairsJustified dd a
{
	color: #4b4276;
}
/* ***************************** */
/* Lists that put all elements on a single line */

.listInline ul,
.listInline ol,
.listInline li,
.listInline dl,
.listInline dt,
.listInline dd
{
	display: inline;
}

/* intended for use with .listInline, produces 'a, b, c, d' / 'a * b * c * d' lists */

.commaImplode li:after,
.commaElements > *:after
{
	content: ', ';
}

.commaImplode li:last-child:after,
.commaElements > *:last-child:after
{
	content: '';
}

.bulletImplode li:before
{
	content: '\2022\a0';
}

.bulletImplode li:first-child:before
{
	content: '';
}

/* Three column list display */

.threeColumnList
{
	overflow: hidden; zoom: 1;
}

.threeColumnList li
{
	float: left;
	width: 32%;
	margin: 2px 1% 2px 0;
}

.twoColumnList
{
	overflow: hidden; zoom: 1;
}

.twoColumnList li
{
	float: left;
	width: 48%;
	margin: 2px 1% 2px 0;
}

/* ***************************** */
/* Preview tooltips (threads etc.) */

.previewTooltip
{
}
		
	.previewTooltip .avatar
	{
		float: left;
	}
	
	.previewTooltip .text
	{
		margin-left: 64px;
	}
	
		.previewTooltip blockquote
		{
			font-size: 15px;
line-height: 1.4;

			
			font-size: 10pt;
			max-height: 150px;
			overflow: hidden;
		}
	
		.previewTooltip .posterDate
		{
			font-size: 11px;
			padding-top: 5px;
			border-top: 1px solid rgb(37, 44, 59);
			margin-top: 5px;
		}

/* ***************************** */
/* List of block links */

.blockLinksList
{
	font-size: 11px;
padding: 0;

}
		
	.blockLinksList a,
	.blockLinksList label
	{
		color: rgb(21, 25, 34);
padding: 5px 10px;
display: block;
outline: 0 none;

	}
	
		.blockLinksList a:hover,
		.blockLinksList a:focus,
		.blockLinksList li.kbSelect a,
		.blockLinksList label:hover,
		.blockLinksList label:focus,
		.blockLinksList li.kbSelect label
		{
			color: rgb(97, 177, 236);
text-decoration: none;

		}
		
		.blockLinksList a:active,
		.blockLinksList li.kbSelect a:active,
		.blockLinksList a.selected,
		.blockLinksList li.kbSelect a.selected,
		.blockLinksList label:active,
		.blockLinksList li.kbSelect label:active,
		.blockLinksList label.selected,
		.blockLinksList li.kbSelect label.selected
		{
			color: rgb(97, 177, 236);
text-decoration: underline;

		}
		
		.blockLinksList a.selected,
		.blockLinksList li.kbSelect a.selected,
		.blockLinksList label.selected,
		.blockLinksList li.kbSelect label.selected
		{
			font-weight: bold;
display: block;

		}
		
		.blockLinksList span.depthPad
		{
			display: block;
		}

.blockLinksList .itemCount
{
	font-weight: bold;
font-size: 9px;
color: white;
background-color: #e03030;
padding: 0 2px;
border-radius: 2px;
position: absolute;
right: 0;
top: 0;
line-height: 16px;
min-width: 12px;
_width: 12px;
text-align: center;
text-shadow: none;
white-space: nowrap;
word-wrap: normal;
box-shadow: 2px 2px 5px rgba(0,0,0, 0.25);
height: 16px;


	float: right;
	position: relative;
	right: 0;
	top: -1px;
}

	.blockLinksList .itemCount.Zero
	{
		display: none;
	}
	
.bubbleLinksList
{
	overflow: hidden;
}
.bubbleLinksList a
{
	float: left;
	padding: 2px 4px;
	margin-right: 2px;
	border-radius: 3px;
	text-decoration: none;
}
	
	.bubbleLinksList a:hover,
	.bubbleLinksList a:active
	{
		color: rgb(97, 177, 236);
text-decoration: none;

	}
	
	.bubbleLinksList a.active
	{
		color: rgb(97, 177, 236);
text-decoration: underline;

		font-weight: bold;
display: block;

	}

/* ***************************** */
/* Normally-indented nested lists */

.indentList ul,
.indentList ol
{
	margin-left: 2em;
}

/* ***************************** */
/* AJAX progress image */

.InProgress
{
	background: transparent url('styles/brivium/NamChelsea/xenforo/widgets/ajaxload.info_B4B4DC_facebook.gif') no-repeat right center;
}

/* ***************************** */
/* Hidden inline upload iframe */

.hiddenIframe
{
	display: block;
	width: 500px;
	height: 300px;
}

/* ***************************** */
/* Exception display */

.traceHtml { font-size:11px; font-family:calibri, verdana, arial, sans-serif; }
.traceHtml .function { color:rgb(180,80,80); font-weight:normal; }
.traceHtml .file { font-weight:normal; }
.traceHtml .shade { color:rgb(128,128,128); }
.traceHtml .link { font-weight:bold; }

/* ***************************** */
/* Indenting for options */

._depth0 { padding-left:  0em; }
._depth1 { padding-left:  2em; }
._depth2 { padding-left:  4em; }
._depth3 { padding-left:  6em; }
._depth4 { padding-left:  8em; }
._depth5 { padding-left: 10em; }
._depth6 { padding-left: 12em; }
._depth7 { padding-left: 14em; }
._depth8 { padding-left: 16em; }
._depth9 { padding-left: 18em; }

.xenOverlay .errorOverlay
{
	color: rgb(40, 40, 40);
	background: #fff;
	border-radius: 5px 5px 3px 3px;
	padding: 10px;
}

	.xenOverlay .errorOverlay .heading
	{
		padding: 8px 10px;
		font-weight: bold;
		font-size: 12pt;
		color: white;
		margin: -10px;
		margin-bottom: 10px;
		border: none;
	}

	.xenOverlay .errorOverlay li
	{
		line-height: 2;
	}
	
	.xenOverlay .errorOverlay .exceptionMessage
	{
		color: rgb(150,150,150);
	}

/*** inline errors ***/

.formValidationInlineError
{
	display: none;
	position: absolute;
	z-index: 5000;
	background-color: white;
	border: 1px solid rgb(180,0,0);
	color: rgb(180,0,0);
	box-shadow: 2px 2px 10px #999;
	border-radius: 3px;
	padding: 2px 5px;
	font-size: 11px;
	width: 175px;
	min-height: 2.5em;
	_height: 2.5em;
	word-wrap: break-word;
}

	.formValidationInlineError.inlineError
	{
		position: static;
		width: auto;
		min-height: 0;
	}

/** Block errors **/

.errorPanel
{
	margin: 10px 0 20px;
	color: rgb(180,0,0);
	background: rgb(255, 235, 235);
	border-radius: 5px;
	border: 1px solid rgb(180,0,0);
}

	.errorPanel .errorHeading
	{
		margin: .75em;
		font-weight: bold;
		font-size: 12pt;
	}
	
	.errorPanel .errors
	{
		margin: .75em 2em;
		display: block;
		line-height: 1.5;
	}


@media (max-width:800px)
{
	.Responsive .formValidationInlineError
	{
		position: static;
		width: auto;
		min-height: auto;
	}
}


/* Undo some nasties */

input[type=search]
{
	-webkit-appearance: textfield;
	box-sizing: content-box;
}

/* ignored content hiding */

.ignored { display: none !important; }

/* Misc */

.floatLeft { float: left; }
.floatRight { float: right; }

.horizontalContain { overflow-x: auto; }

.ltr { direction: ltr; }

/* Square-cropped thumbs */

.SquareThumb
{
	position: relative;
	display: block;
	overflow: hidden;
	padding: 0;
	direction: ltr;
	
	/* individual instances can override this size */
	width: 48px;
	height: 48px;
}

.SquareThumb img
{
	position: relative;
	display: block;
}

/* Basic, common, non-templated BB codes */

.bbCodeImage
{
	max-width: 100%;
}

.bbCodeImageFullSize
{
	position: absolute;
	z-index: 50000;
	background-color: rgb(255, 255, 255);
}

.bbCodeStrike
{
	text-decoration: line-through;
}

img.mceSmilie,
img.mceSmilieSprite
{
	vertical-align: text-bottom;
	margin: 0 1px;
}

/* smilie sprite classes */

img.mceSmilieSprite.mceSmilie1
{
	width: 18px; height: 18px; background: url('styles/default/xenforo/xenforo-smilies-sprite.png') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie2
{
	width: 18px; height: 18px; background: url('styles/default/xenforo/xenforo-smilies-sprite.png') no-repeat -60px -21px;
}

img.mceSmilieSprite.mceSmilie3
{
	width: 18px; height: 18px; background: url('styles/default/xenforo/xenforo-smilies-sprite.png') no-repeat -40px -42px;
}

img.mceSmilieSprite.mceSmilie4
{
	width: 18px; height: 18px; background: url('styles/default/xenforo/xenforo-smilies-sprite.png') no-repeat -60px 0px;
}

img.mceSmilieSprite.mceSmilie5
{
	width: 18px; height: 18px; background: url('styles/default/xenforo/xenforo-smilies-sprite.png') no-repeat -40px -21px;
}

img.mceSmilieSprite.mceSmilie6
{
	width: 18px; height: 18px; background: url('styles/default/xenforo/xenforo-smilies-sprite.png') no-repeat -40px 0px;
}

img.mceSmilieSprite.mceSmilie7
{
	width: 18px; height: 18px; background: url('styles/default/xenforo/xenforo-smilies-sprite.png') no-repeat -20px -21px;
}

img.mceSmilieSprite.mceSmilie8
{
	width: 18px; height: 18px; background: url('styles/default/xenforo/xenforo-smilies-sprite.png') no-repeat -20px 0px;
}

img.mceSmilieSprite.mceSmilie9
{
	width: 18px; height: 18px; background: url('styles/default/xenforo/xenforo-smilies-sprite.png') no-repeat -20px -42px;
}

img.mceSmilieSprite.mceSmilie10
{
	width: 18px; height: 18px; background: url('styles/default/xenforo/xenforo-smilies-sprite.png') no-repeat 0px -42px;
}

img.mceSmilieSprite.mceSmilie11
{
	width: 18px; height: 18px; background: url('styles/default/xenforo/xenforo-smilies-sprite.png') no-repeat 0px -21px;
}

img.mceSmilieSprite.mceSmilie12
{
	width: 18px; height: 18px; background: url('styles/default/xenforo/xenforo-smilies-sprite.png') no-repeat -80px -42px;
}


.visibleResponsiveFull { display: inherit !important; }

.visibleResponsiveWide,
.visibleResponsiveMedium,
.visibleResponsiveNarrow { display: none !important; }

.hiddenResponsiveFull { display: none !important; } 

.hiddenResponsiveWide,
.hiddenResponsiveMedium,
.hiddenResponsiveNarrow { display: inherit !important; }


@media (max-width:800px)
{
	.Responsive .visibleResponsiveFull { display: none !important; }
	
	.Responsive .hiddenResponsiveFull { display: inherit !important; }
	
	.Responsive .hiddenWideUnder { display: none !important; }
}
@media (min-width:611px) AND (max-width:800px)
{
	.Responsive .visibleResponsiveWide { display: inherit !important; }
	
	.Responsive .hiddenResponsiveWide { display: none !important; }
	}

@media (min-width:481px) AND (max-width:610px)
{
	.Responsive .visibleResponsiveMedium { display: inherit !important; }
	
	.Responsive .hiddenResponsiveMedium { display: none !important; }
	
	.Responsive .hiddenWideUnder,
	.Responsive .hiddenMediumUnder { display: none !important; }
}

@media (max-width:480px)
{
	.Responsive .visibleResponsiveNarrow { display: inherit !important; }
	
	.Responsive .hiddenResponsiveNarrow { display: none !important; }
	
	.Responsive .hiddenWideUnder,
	.Responsive .hiddenMediumUnder,
	.Responsive .hiddenNarrowUnder { display: none !important; }
}

@media (max-width:610px)
{
	.Responsive .threeColumnList li
	{
		float: none;
		width: auto;
		margin: 2px 1% 2px 0;
	}
}

@media (max-width:480px)
{
	.Responsive .xenTooltip.statusTip
	{
		width: auto;
	}
	
	.Responsive .xenPreviewTooltip
	{
		box-sizing: border-box;
		width: auto;
		max-width: 100%;
	}
	
	.Responsive .xenPreviewTooltip .arrow
	{
		display: none;
	}
	
	.Responsive .previewTooltip .avatar
	{
		display: none;
	}
	
	.Responsive .previewTooltip .text
	{
		margin-left: 0;
	}
}




/* --- form.css --- */

/** Forms **/

.xenForm
{
	margin: 10px auto;
	max-width: 800px;
}

	.xenOverlay .xenForm
	{
		/*max-width: 600px;*/
	}

.xenForm .ctrlUnit > dd
{
	width: 68%;
	box-sizing: border-box;
	padding-right: 0px;
}

.xenForm .ctrlUnit > dd .textCtrl
{
	box-sizing: border-box;
	width: 100%;
}

	.xenForm .ctrlUnit > dd .textCtrl.indented
	{
		width: calc(100% - 16px);
	}

	.xenForm .ctrlUnit > dd .textCtrl[size],
	.xenForm .ctrlUnit > dd .textCtrl.autoSize
	{
		width: auto !important;
		min-width: 0;
	}

	.xenForm .ctrlUnit > dd .textCtrl.number
	{
		width: 150px;
	}


.xenForm > .sectionHeader:first-child,
.xenForm > fieldset > .sectionHeader:first-child
{
	margin-top: 0;
}

/** Sections **/

.xenForm fieldset,
.xenForm .formGroup
{
	border-top: 1px solid rgb(222, 230, 238);
	margin: 20px auto;
}

.insideSidebar .xenForm fieldset,
.insideSidebar .xenForm .formGroup
{
	border-top: 1px solid rgb(222, 230, 238);
}

.xenForm > fieldset:first-child,
.xenForm > .formGroup:first-child
{
	border-top: none;
	margin: auto;
}

.xenForm .PreviewContainer + fieldset,
.xenForm .PreviewContainer + .formGroup
{
	border-top: none;
}

.xenForm fieldset + .ctrlUnit,
.xenForm .formGroup + .ctrlUnit,
.xenForm .submitUnit
{
	border-top: 1px solid rgb(222, 230, 238);
}

.insideSidebar .xenForm fieldset + .ctrlUnit,
.insideSidebar .xenForm .formGroup + .ctrlUnit,
.insideSidebar .xenForm .submitUnit
{
	border-top: 1px solid rgb(222, 230, 238);
}

.xenForm fieldset + .ctrlUnit,
.xenForm .formGroup + .ctrlUnit
{
	padding-top: 10px;
}

.insideSidebar .xenForm .submitUnit
{
	padding-top: 10px;
}

.xenForm .primaryContent + .submitUnit,
.xenForm .secondaryContent + .submitUnit
{
	margin-top: 0;
	border-top: none;
}

.xenForm .ctrlUnit.submitUnit dd
{	
	line-height: 31px;
	padding-top: 0;
}

	.ctrlUnit.submitUnit dd .explain,
	.ctrlUnit.submitUnit dd .text,
	.ctrlUnit.submitUnit dd label
	{
		line-height: 1.28;
	}

/* now undo that */

.xenOverlay .ctrlUnit.submitUnit dd,
.Menu .ctrlUnit.submitUnit dd,
#QuickSearch .ctrlUnit.submitUnit dd
{
	border: none;
	background: none;
}

.xenForm .ctrlUnit
{
	
}
	.xenForm .ctrlUnit.limited
	{
		display: none;
	}

	/** Sections Immediately Following Headers **/

	.xenForm .sectionHeader + fieldset,
	.xenForm .heading + fieldset,
	.xenForm .subHeading + fieldset,
	.xenForm .sectionHeader + .formGroup,
	.xenForm .heading + .formGroup,
	.xenForm .subHeading + .formGroup
	{
		border-top: none;
		margin-top: 0;
	}
	
.xenForm .formHiderHeader
{
	margin: 10px;
	font-size: 15px;
	font-weight: bold;
}


/** *********************** **/
/** TEXT INPUTS             **/
/** *********************** **/

.textCtrl
{
	font-size: 13px;
font-family: Calibri, 'Trebuchet MS', Verdana, Geneva, Arial, Helvetica, sans-serif;
color: #000000;
background-color: #ffffff;
padding: 3px 5px;
margin-bottom: 2px;
border-width: 1px;
border-style: solid;
border-top-color: rgb(192, 192, 192);
border-right-color: rgb(233, 233, 233);
border-bottom-color: rgb(233, 233, 233);
border-left-color: rgb(192, 192, 192);
border-radius: 2px;
outline: 0;

}

select.textCtrl
{
	word-wrap: normal;
	-webkit-appearance: menulist;
}

select[multiple].textCtrl,
select[size].textCtrl
{
	-webkit-appearance: listbox;
}

select[size="0"].textCtrl,
select[size="1"].textCtrl
{
	-webkit-appearance: menulist;
}

textarea.textCtrl
{
	word-wrap: break-word;
}

	.textCtrl:focus,
	.textCtrl.Focus
	{
		background: rgb(255,255,240) url('styles/brivium/NamChelsea/xenforo/gradients/form-element-focus-25.png') repeat-x;
border-top-color: rgb(150,150,150);
border-bottom-color: rgb(230,230,230);

	}	

	textarea.textCtrl:focus
	{
		background-image: url('styles/brivium/NamChelsea/xenforo/gradients/form-element-focus-100.png');

	}

	input.textCtrl.disabled,
	textarea.textCtrl.disabled,
	.disabled .textCtrl
	{
		font-style: italic;
color: rgb(100,100,100);
background-color: rgb(245,245,245);

	}
	
	.textCtrl.prompt
	{
		color: rgb(109, 109, 120);

	}
	
	.textCtrl:-moz-placeholder
	{
		/* needs to be in its own rule due to weird selector */
		color: rgb(109, 109, 120);

	}
	
	.textCtrl::-moz-placeholder
	{
		/* needs to be in its own rule due to weird selector */
		color: rgb(109, 109, 120);

	}

	.textCtrl::-webkit-input-placeholder
	{
		/* needs to be in its own rule due to weird selector */
		color: rgb(109, 109, 120);

	}
	
	.textCtrl:-ms-input-placeholder
	{
		/* needs to be in its own rule due to weird selector */
		color: rgb(109, 109, 120);

	}
	
	.textCtrl.autoSize
	{
		width: auto !important;
	}

	.textCtrl.number,
	.textCtrl.number input
	{
		text-align: right;
		width: 150px;
	}
	
	.textCtrl.fillSpace
	{
		width: 100%;
		box-sizing: border-box;
		_width: 95%;
	}

	.textCtrl.code,
	.textCtrl.code input
	{
		font-family: Consolas, "Courier New", Courier, monospace;
white-space: pre;
word-wrap: normal;
direction: ltr;

	}
	
	input.textCtrl[type="password"]
	{
		font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;
	}

	input[type="email"],
	input[type="url"]
	{
		direction: ltr;
	}

	.textCtrl.titleCtrl,
	.textCtrl.titleCtrl input
	{
		font-size: 18pt;
		padding: 3px 5px;
	}

textarea.textCtrl.Elastic
{
	/* use for jQuery.elastic */
	max-height: 300px;
}

/* for use with wrapped inputs */
.textCtrlWrap
{
	display: inline-block;
}

.textCtrlWrap input.textCtrl
{
	padding: 0 !important;
	margin: 0 !important;
	border: none !important;
	background: transparent !important;
	border-radius: 0 !important;
}

.textCtrlWrap.blockInput input.textCtrl
{
	border-top: 1px solid rgb(192, 192, 192) !important;
	margin-top: 4px !important;
}

.taggingInput.textCtrl
{
	padding-top: 1px;
	min-height: 25px;
}

.taggingInput input
{
	margin: 0px;
	font-size: 12px;
	border: 1px solid transparent;
	padding: 0;
	background: transparent;
	outline: 0;
	color: inherit;
	font-family: inherit;
}

.taggingInput .tag
{
	border: 1px solid rgb(196, 225, 255);
	border-radius: 3px;
	display: inline-block;
	padding: 0 3px;
	text-decoration: none;
	background: rgb(37, 44, 59) url('styles/brivium/NamChelsea/xenforo/gradients/form-button-white-25px.png') repeat-x top;
	color: rgb(21, 25, 34);
	margin-right: 3px;
	margin-top: 2px;
	font-size: 12px;
	max-width: 98%;
	box-shadow: 1px 1px 3px rgba(0,0,0, 0.25);
}

.disabled.taggingInput .tag
{
	opacity: 0.7;
}

	.disabled.taggingInput .tag a
	{
		pointer-events: none;
	}

	html .taggingInput .tag a
	{
		color: rgb(97, 177, 236);
		font-weight: bold;
		text-decoration: none;
	}

.taggingInput .addTag
{
	display: inline-block;
	min-width: 150px;
	max-width: 100%;
	margin-top: 2px;
}

.taggingInput .tagsClear
{
	clear: both;
	width: 100%;
	height: 0px;
	float: none;
}

/** *********************** **/
/** BUTTONS                 **/
/** *********************** **/

.button
{
	font-style: normal;
	
	font-size: 13px;
color: #ffffff;
background-color: #7F7F7F;
padding: 0px 6px;
border: 1px none black;
border-top-color: rgb(255, 255, 255);
border-radius: 2px;
text-align: center;
outline: none;
line-height: 30px;
display: inline-block;
cursor: pointer;
box-sizing: border-box;
height: 30px;

}

.button.smallButton
{
	font-size: 11px;
	padding: 0px 10px;
	line-height: 21px;
	height: 21px;
	border-radius: 2px;
}

.button.primary
{
	background-color: rgb(31, 95, 161);

}

input.button.disabled,
a.button.disabled,
input.button.primary.disabled,
a.button.primary.disabled,
html .buttonProxy .button.disabled
{
	color: #999;
background-color: #EEE;
box-shadow: 0 0 0 transparent;

}

	.button::-moz-focus-inner
	{
		border: none;
	}

	a.button
	{
		display: inline-block;
		color: #ffffff;
	}

	.button:hover,
	.button[href]:hover,
	.buttonProxy:hover .button
	{
		color: #ffffff;
text-decoration: none;
background-color: rgb(100, 209, 244);
border-top-color: white;

	}

	.button:focus
	{
		border-color: rgb(97, 177, 236);

	}

	.button:active,
	.button[href]:active,
	.button.ToggleButton.checked,
	.buttonProxy:active .button
	{
		color: #ffffff;
background-color: rgb(97, 177, 236);
border-bottom-color: white;
outline: 0;

	}

	.button.ToggleButton
	{
		cursor: default;
		width: auto;
		color: black;
	}
	
	.button.ToggleButton.checked
	{
		background-color: rgb(255,150,50);
	}

	.button.inputSupplementary
	{
		width: 25px;
		position: absolute;
		top: 0px;
		right: 0px;
	}

	.button.inputSupplementary.add
	{
		color: green;
	}

	.button.inputSupplementary.delete
	{
		color: red;
	}

	.submitUnit .button
	{
		min-width: 100px;
		*min-width: 0;
	}

















/** Control Units **/

.xenForm .ctrlUnit
{
	position: relative;
	margin: 10px auto;
}

/* clearfix */ .xenForm .ctrlUnit { zoom: 1; } .xenForm .ctrlUnit:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

.xenForm .ctrlUnit.fullWidth
{
	overflow: visible;
}

/** Control Unit Labels **/

.xenForm .ctrlUnit > dt
{
	padding-top: 4px;
padding-right: 15px;
text-align: right;
vertical-align: top;

	box-sizing: border-box;
	width: 32%;
	float: left;
}

/* special long-text label */
.xenForm .ctrlUnit > dt.explain
{
	font-size: 11px;
	text-align: justify;
}


.xenForm .ctrlUnit.fullWidth dt,
.xenForm .ctrlUnit.submitUnit.fullWidth dt
{
	float: none;
	width: auto;
	text-align: left;
	height: auto;
}

.xenForm .ctrlUnit.fullWidth dt
{
	margin-bottom: 2px;
}

	.xenForm .ctrlUnit > dt label
	{
		margin-left: 0px;
	}

	/** Hidden Labels **/

	.xenForm .ctrlUnit.surplusLabel dt label
	{
		display: none;
	}

	/** Section Links **/

	.ctrlUnit.sectionLink dt
	{
		text-align: left;
		font-size: 11px;
	}

		.ctrlUnit.sectionLink dt a
		{
			margin-left: 11px; /*TODO: sectionHeader padding + border*/
		}		

	/** Hints **/

	.ctrlUnit > dt dfn
	{
		font-style: italic;
font-size: 10px;
color: rgb(150,150,150);
margin-left: 0px;
display: block;

	}
	
	.ctrlUnit.fullWidth dt dfn
	{
		display: inline;
		margin: 0;
	}
	
		.ctrlUnit > dt dfn b,
		.ctrlUnit > dt dfn strong
		{
			color: rgb(222, 222, 222);
		}

	/** Inline Errors **/

	.ctrlUnit > dt .error
	{
		font-size: 10px;
color: red;
display: block;

	}
	
	.ctrlUnit > dt dfn,
	.ctrlUnit > dt .error,
	.ctrlUnit > dt a
	{
		font-weight: normal;
	}

.xenForm .ctrlUnit.submitUnit dt
{
	height: 19px;
	display: block;
}

	.ctrlUnit.submitUnit dt.InProgress
	{
		background: transparent url('styles/brivium/NamChelsea/xenforo/widgets/ajaxload.info_B4B4DC_facebook.gif') no-repeat center center;
	}

/** Control Holders **/

.xenForm .ctrlUnit > dd
{
	/*todo: kill property */
	
	float: left;
}

.xenForm .ctrlUnit.fullWidth > dd
{
	float: none;
	width: auto;
	padding-left: 0px;
}

/** Explanatory paragraph **/

.ctrlUnit > dd .explain
{
	font-size: 11px;
color: rgb(150,150,150);
margin-top: 2px;

	/*TODO:max-width: auto;*/
}
	
	.ctrlUnit > dd .explain b,
	.ctrlUnit > dd .explain strong
	{
		color: rgb(222, 222, 222);
	}

/** List items inside controls **/

.ctrlUnit > dd > * > li
{
	margin: 4px 0 8px;
	padding-left: 1px; /* fix a webkit display bug */
}

.ctrlUnit > dd > * > li:first-child > .textCtrl:first-child
{
	margin-top: -3px;
}

.ctrlUnit > dd .break
{
	margin-bottom: 0.75em;
	padding-bottom: 0.75em;
}

.ctrlUnit > dd .rule
{
	border-bottom: 1px solid rgb(37, 44, 59);
}

.ctrlUnit > dd .ddText
{
	margin-bottom: 2px;
}

/** Hints underneath checkbox / radio controls **/

.ctrlUnit > dd > * > li .hint
{
	font-size: 11px;
	color: rgb(150,150,150);
	margin-left: 16px;
	margin-top: 2px;
}

/** DISABLERS **/

.ctrlUnit > dd > * > li > ul,
.ctrlUnit .indented
{
	margin-left: 16px;
}

.ctrlUnit > dd > * > li > ul > li:first-child
{
	margin-top: 6px;
}

.ctrlUnit > dd .disablerList > li,
.ctrlUnit > dd .checkboxColumns > li,
.ctrlUnit > dd .choiceList > li
{
	margin-top: 6px;
}
	
/** Other stuff... **/

.ctrlUnit > dd .helpLink
{
	font-size: 10px;
}

.ctrlUnit.textValue dt
{
	padding-top: 0px;
}

.button.spinBoxButton
{
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	height: 24px;
	line-height: 24px;
	margin-left: 5px;
}

.unitPairsJustified li
{
	overflow: hidden;
}

	.unitPairsJustified li .label
	{
		float: left;
	}
	
	.unitPairsJustified li .value
	{
		float: right;
	}

#calroot
{
	margin-top: -1px;
	width: 198px;
	padding: 2px;
	background-color: rgb(255, 255, 255);
	font-size: 11px;
	border: 1px solid rgb(31, 95, 161);
	border-radius: 5px;
	box-shadow: 0 0 15px #666;
	z-index: 7500;
}

#calhead
{	
	padding: 2px 0;
	height: 22px;
} 

	#caltitle {
		font-size: 11pt;
		color: rgb(31, 95, 161);
		float: left;
		text-align: center;
		width: 155px;
		line-height: 20px;
	}
	
	#calnext, #calprev {
		display: block;
		width: 20px;
		height: 20px;
		font-size: 11pt;
		line-height: 20px;
		text-align: center;
		float: left;
		cursor: pointer;
	}

	#calnext {
		float: right;
	}

	#calprev.caldisabled, #calnext.caldisabled {
		visibility: hidden;	
	}

#caldays {
	height: 14px;
	border-bottom: 1px solid rgb(31, 95, 161);
}

	#caldays span {
		display: block;
		float: left;
		width: 28px;
		text-align: center;
		color: rgb(31, 95, 161);
	}

#calweeks {
	margin-top: 4px;
}

.calweek {
	clear: left;
	height: 22px;
}

	.calweek a {
		display: block;
		float: left;
		width: 27px;
		height: 20px;
		text-decoration: none;
		font-size: 11px;
		margin-left: 1px;
		text-align: center;
		line-height: 20px;
		border-radius: 3px;
	} 
	
		.calweek a:hover, .calfocus {
			background-color: rgb(222, 230, 238);
		}

a.caloff {
	color: rgb(150,150,150);		
}

a.caloff:hover {
	background-color: rgb(222, 230, 238);		
}

a.caldisabled {
	background-color: #efefef !important;
	color: #ccc	!important;
	cursor: default;
}

#caltoday {
	font-weight: bold;
}

#calcurrent {
	background-color: rgb(31, 95, 161);
	color: rgb(222, 230, 238);
}
ul.autoCompleteList
{
	background-color: rgb(255, 255, 255);
	
	border: 1px solid rgb(97, 177, 236);
	padding: 2px;
	
	font-size: 11px;
	
	min-width: 180px;
	_width: 180px;
	
	z-index: 1000;
}

ul.autoCompleteList li
{
	padding: 3px 3px;
	height: 24px;
	line-height: 24px;
}

ul.autoCompleteList li:hover,
ul.autoCompleteList li.selected
{
	background-color: rgb(255, 255, 255);
	border-radius: 3px;
}

ul.autoCompleteList img.autoCompleteAvatar
{
	float: left;
	margin-right: 3px;
	width: 24px;
	height: 24px;
}

ul.autoCompleteList li strong
{
	font-weight: bold;
}

/** status editor **/

.statusEditorCounter
{
	color: green;
}

.statusEditorCounter.warning
{
	color: orange;
	font-weight: bold;
}

.statusEditorCounter.error
{
	color: red;
	font-weight: bold;
}

.explain .statusHeader
{
	display: inline;
}

.explain .CurrentStatus
{
	color: rgb(40, 40, 40);
	font-style: italic;
	padding-left: 5px;
}

/* BB code-based editor styling */

.xenForm .ctrlUnit.fullWidth dd .bbCodeEditorContainer textarea
{
	margin-left: 0;
	min-height: 200px;
}

.bbCodeEditorContainer a
{
	font-size: 11px;
}

/*
 * Fix silly top padding. This may require additional tags in the padding-top selector.
 */

.xenForm .ctrlUnit > dd
{
	padding-top: 4px;
}

	.xenForm .ctrlUnit.fullWidth > dd
	{
		padding-top: 0;
	}

.xenForm .ctrlUnit > dd > input,
.xenForm .ctrlUnit > dd > select,
.xenForm .ctrlUnit > dd > textarea,
.xenForm .ctrlUnit > dd > ul,
.xenForm .ctrlUnit > dd > .verticalShift
{
	margin-top: -4px;
}

	.xenForm .ctrlUnit.fullWidth > dd > input,
	.xenForm .ctrlUnit.submitUnit > dd > input,
	.xenForm .ctrlUnit.fullWidth > dd > select,
	.xenForm .ctrlUnit.submitUnit > dd > select,
	.xenForm .ctrlUnit.fullWidth > dd > textarea,
	.xenForm .ctrlUnit.submitUnit > dd > textarea,
	.xenForm .ctrlUnit.fullWidth > dd > ul,
	.xenForm .ctrlUnit.submitUnit > dd > ul
	{
		margin-top: 0;
	}
	
/*
 * Multi-column checkboxes
 */
 
.xenForm .checkboxColumns > dd > ul,
ul.checkboxColumns
{
	-webkit-column-count : 2; -moz-column-count : 2;column-count: 2;
	-webkit-column-gap : 8px; -moz-column-gap : 8px;column-gap: 8px;
}

	.xenForm .checkboxColumns > dd > ul li,
	ul.checkboxColumns li
	{
		-webkit-column-break-inside : avoid; -moz-column-break-inside : avoid;column-break-inside: avoid;
		break-inside: avoid-column;
		margin-bottom: 4px;
		padding-left: 1px;
		display: inline-block;
		width: 100%;
	}
	
	.xenForm .checkboxColumns.blockLinksList > dd > ul li,
	ul.checkboxColumns.blockLinksList li
	{
		display: block;
	}

.xenForm .checkboxColumns.multiple > dd > ul
{
	-webkit-column-count : auto; -moz-column-count : auto;column-count: auto;
	-webkit-column-gap : normal; -moz-column-gap : normal;column-gap: normal;
}

.xenForm .checkboxColumns.multiple > dd
{
	-webkit-column-count : 2; -moz-column-count : 2;column-count: 2;
	-webkit-column-gap : 8px; -moz-column-gap : 8px;column-gap: 8px;
}

.xenForm .checkboxColumns.multiple > dd > ul
{
	margin-bottom: 18px;
}

#recaptcha_image
{
	box-sizing: content-box;
	max-width: 100%;
}

#recaptcha_image img
{
	max-width: 100%;
}

#helper_birthday { display: inline-block; }
#helper_birthday > li
{
	display: inline;
}
html[dir=rtl] #helper_birthday input,
html[dir=rtl] #helper_birthday select
{
	direction: rtl;
}


@media (max-width:480px)
{
	.Responsive .xenForm .ctrlUnit > dt
	{
		float: none;
		width: auto;
		text-align: left;
		height: auto;
	}

		.Responsive .xenForm .ctrlUnit > dt label,
		.Responsive .xenForm .ctrlUnit > dt dfn
		{
			margin-left: 0;
		}

	.Responsive .xenForm .ctrlUnit.submitUnit dt
	{
		height: auto;
	}

	.Responsive .xenForm .ctrlUnit > dd,
	.Responsive .xenForm .ctrlUnit.fullWidth dd
	{
		float: none;
		width: auto;
		text-align: left;
		height: auto;
		padding-left: 0px;
		padding-right: 0px;
		overflow: hidden;
	}

	.Responsive .xenForm .checkboxColumns > dd > ul,
	.Responsive ul.checkboxColumns
	{
		-webkit-column-count : 1; -moz-column-count : 1;column-count: 1;
	}
	
	.Responsive #ctrl_upload
	{
		max-width: 200px;
	}
	
	.Responsive .xenForm .ctrlUnit > dd .textCtrl[size],
	.Responsive .xenForm .ctrlUnit > dd .textCtrl.autoSize
	{
		width: 100% !important;
	}
	
	.Responsive .xenForm .ctrlUnit > dd > input,
	.Responsive .xenForm .ctrlUnit > dd > select,
	.Responsive .xenForm .ctrlUnit > dd > textarea,
	.Responsive .xenForm .ctrlUnit > dd > ul,
	.Responsive .xenForm .ctrlUnit > dd > .verticalShift
	{
		margin-top: 0;
	}
}

@media (max-width:610px)
{
	.Responsive .insideSidebar .xenForm .ctrlUnit > dt
	{
		float: none;
		width: auto;
		text-align: left;
		height: auto;
	}

		.Responsive .insideSidebar .xenForm .ctrlUnit > dt label,
		.Responsive .insideSidebar .xenForm .ctrlUnit > dt dfn
		{
			margin-left: 0;
		}

	.Responsive .insideSidebar .xenForm .ctrlUnit.submitUnit dt
	{
		height: auto;
	}

	.Responsive .insideSidebar .xenForm .ctrlUnit > dd,
	.Responsive .insideSidebar .xenForm .ctrlUnit.fullWidth dd
	{
		float: none;
		width: auto;
		text-align: left;
		height: auto;
		padding-left: 0px;
		padding-right: 0px;
		overflow: hidden;
	}
	
	.Responsive .insideSidebar .xenForm .ctrlUnit > dd .textCtrl[size],
	.Responsive .insideSidebar .xenForm .ctrlUnit > dd .textCtrl.autoSize
	{
		width: 100% !important;
	}
	
	.Responsive .insideSidebar .xenForm .ctrlUnit > dd > input,
	.Responsive .insideSidebar .xenForm .ctrlUnit > dd > select,
	.Responsive .insideSidebar .xenForm .ctrlUnit > dd > textarea,
	.Responsive .insideSidebar .xenForm .ctrlUnit > dd > ul
	{
		margin-top: -0;
	}
}

@media (max-device-width:568px)
{
	.Responsive .textCtrl,
	.Responsive .taggingInput input,
	.Responsive .taggingInput .tag
	{
		font-size: 16px;
	}
}


/* --- public.css --- */

#header
{
	background-color: rgb(14, 62, 110);

}

/* clearfix */ #header .pageWidth .pageContent { zoom: 1; } #header .pageWidth .pageContent:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

	#logo
	{
		display: block;
		float: left;
		line-height: 96px;
		*line-height: 100px;
		height: 100px;
		max-width: 100%;
		vertical-align: middle;
	}

		/* IE6/7 vertical align fix */
		#logo span
		{
			*display: inline-block;
			*height: 100%;
		}

		#logo a:hover
		{
			text-decoration: none;
		}

		#logo img
		{
			vertical-align: middle;
			max-width: 100%;
		}

	#visitorInfo
	{
		float: right;
		min-width: 250px;
		_width: 250px;
		overflow: hidden; zoom: 1;
		background: rgb(196, 225, 255);
		padding: 5px;
		border-radius: 5px;
		margin: 10px 0;
		border: 1px solid #032A46;
		color: #032A46;
	}

		#visitorInfo .avatar
		{
			float: left;
			display: block;
		}

			#visitorInfo .avatar .img
			{
				border-color: rgb(31, 95, 161);
			}

		#visitorInfo .username
		{
			font-size: 18px;
			text-shadow: 1px 1px 10px white;
			color: #032A46;
			white-space: nowrap;
			word-wrap: normal;
		}

		#alerts
		{
			zoom: 1;
		}

		#alerts #alertMessages
		{
			padding-left: 5px;
		}

		#alerts li.alertItem
		{
			font-size: 11px;
		}

			#alerts .label
			{
				color: #032A46;
			}

.footer .pageContent
{
	font-size: 12px;
overflow: hidden;
zoom: 1;

}
	footer,
	.footer a,
	.footer a:visited
	{
		color: #ffffff;

	}
	
	.footerLegal a
	{
		color: rgb(222, 222, 222);
	}
		
		.footerLegal a:hover,
		.footerLegal a:active,
		.footer a:hover,
		.footer a:active
		{
			
		}

	.footer .choosers
	{
		padding-left: 5px;
float: left;
overflow: hidden;
zoom: 1;

	}
	
		.footer .choosers dt
		{
			display: none;
		}
		
		.footer .choosers dd
		{
			float: left;
			
		}
		
	.footerLinks
	{
		padding-right: 5px;
float: right;
overflow: hidden;
zoom: 1;

	}
	
		.footerLinks li
		{
			float: left;
			
		}
		
			.footerLinks a.globalFeed
			{
				width: 14px;
				height: 14px;
				display: block;
				text-indent: -9999px;
				white-space: nowrap;
				background: url('styles/brivium/NamChelsea/xenforo/xenforo-ui-sprite.png') no-repeat -112px -16px;
				padding: 0;
				/*margin: 5px;*/
			}

.footerLegal .pageContent
{
	font-size: 12px;
	overflow: hidden; zoom: 1;
	padding: 10px 5px;
	text-align: center;
}
	
	#copyright
	{
		float: left;
	}
	
	#legal
	{
		float: right;
	}
	
		#legal li
		{
			float: left;
			
		}


@media (max-width:610px)
{
	.Responsive .footerLinks a.globalFeed,
	.Responsive .footerLinks a.topLink,
	.Responsive .footerLinks a.homeLink
	{
		display: none;
	}

	.Responsive .footerLegal .debugInfo
	{
		clear: both;
	}
}

@media (max-width:480px)
{
	.Responsive #copyright span
	{
		display: none;
	}
}


.breadBoxTop,
.breadBoxBottom
{
	padding: 0 15px;
border: 1px solid #e5e5e5;
border-radius: 3px;
line-height: 34px;
overflow: hidden;
zoom: 1;
clear: both;
box-sizing: border-box;
/* IE6 & IE7 */
/* IE8+ */
height: 34px;

}

.breadBoxTop
{
	margin: 18px 0;
}

.breadBoxTop .topCtrl
{
	margin-left: 5px;
float: right;
line-height: 32px;

}

.breadBoxBottom
{
	margin: 18px 0 0;
}

.breadcrumb
{
	font-size: 14px;
overflow: hidden;
zoom: 1;
max-width: 100%;
line-height: 32px;
height: 32px;

}

.breadcrumb.showAll
{
	height: auto;
}

.breadcrumb .boardTitle
{
	display: none;

}

.breadcrumb .crust
{
	display: block;
float: left;
position: relative;
zoom: 1;
max-width: 50%;

}

.breadcrumb .crust a.crumb
{
	cursor: pointer;
	color: #2a2825;
text-decoration: none;
padding: 0 10px 0 18px;
outline: 0 none;
-moz-outline-style: 0 none;
display: block;
_border-bottom: none;
line-height: 32px;

}

/*
.breadcrumb .crust.selectedTabCrumb a.crumb
{
	color: rgb(150,150,150);
}
*/
	.breadcrumb .crust a.crumb > span
	{
		display: block;
		text-overflow: ellipsis;
		word-wrap: normal;
		white-space: nowrap;
		overflow: hidden;
		max-width: 100%;
	}

	.breadcrumb .crust:first-child a.crumb,
	.breadcrumb .crust.firstVisibleCrumb a.crumb
	{
		padding-left: 0;

	}
	
	.breadcrumb .crust:last-child a.crumb
	{
		
	}

.breadcrumb .crust .arrow
{
	border-top: 4px solid transparent;
border-bottom: 4px solid transparent;
border-left: 4px solid #242b3a;
display: block;
position: absolute;
right: -5px;
top: 12px;
z-index: 50;
width: 0px;
height: 0px;

}

.breadcrumb .crust .arrow span
{
	border-top: 4px solid transparent;
border-bottom: 4px solid transparent;
border-left: 4px solid #1d222e;
display: block;
position: absolute;
left: -4px;
top: -4px;
z-index: 51;
white-space: nowrap;
overflow: hidden;
text-indent: 9999px;
width: 0px;
height: 0px;

}

.breadcrumb .crust:hover a.crumb
{
	
}

	.breadcrumb .crust .arrow
	{
		/* hide from IE6 */
		_display: none;
	}

.breadcrumb .jumpMenuTrigger
{
	background: transparent url('styles/brivium/NamChelsea/xenforo/xenforo-ui-sprite.png') no-repeat 100% 100%;
margin: 5px 0 0;
display: block;
float: right;
white-space: nowrap;
text-indent: 9999px;
overflow: hidden;
width: 20px;
height: 20px;

}


@media (max-width:480px)
{
	.Responsive .breadBoxTop.withTopCtrl
	{
		display: table;
		table-layout: fixed;
		width: 100%;
	}

	.Responsive .breadBoxTop.withTopCtrl nav
	{
		display: table-header-group;
	}

	.Responsive .breadBoxTop.withTopCtrl .topCtrl
	{
		display: table-footer-group;
		margin-top: 5px;
		text-align: right;
	}
}


#navigation
{
	background: url('styles/brivium/NamChelsea/extra/bg-navtab.png') left top repeat-x;
}

#navigation .pageContent
{
	height: 100px;
	position: relative;
}

#navigation .menuIcon
{
	position: relative;
	font-size:18px;
	width: 16px;
	display: inline-block;
	text-indent: -9999px;
}

#navigation .PopupOpen .menuIcon:before,
#navigation .navLink .menuIcon:before
{
	zoom: 1;
}

#navigation .menuIcon:before
{
	content: "";
	font-size: 18px;
	position: absolute;
	/*top: 0.4em;*/
	top: 1.1em;
	left: 0;
	width: 16px;
	height: 2px;
	border-top: 6px double currentColor;
	border-bottom: 2px solid currentColor;
}

	.navTabs
	{
		font-size: 14px;
color: #c4e1ff;
padding: 0;
text-transform: uppercase;

		
		height: 50px;
	}
	
		.navTabs .publicTabs
		{
			float: left;
		}
		
		.navTabs .visitorTabs
		{
			float: right;
		}
	
			.navTabs .navTab
			{
				float: left;
				white-space: nowrap;
				word-wrap: normal;
				
				
			}
			
			.navTabs .visitorTabs .navTab
			{
				margin-left: 2px;
			}


/* ---------------------------------------- */
/* Links Inside Tabs */

.navTabs .navLink,
.navTabs .SplitCtrl
{
	display: block;
float: left;
vertical-align: text-bottom;
text-align: center;
outline: 0 none;

	
	
	
	height: 50px;
	line-height: 50px;
}

	.navTabs .publicTabs .navLink
	{
		padding: 0 18px;
	}
	
	.navTabs .visitorTabs .navLink
	{
		padding: 0 10px;
	}
	
	.navTabs .navLink:hover
	{
		text-decoration: none;
	}
	
	/* ---------------------------------------- */
	/* unselected tab, popup closed */

	.navTabs .navTab.PopupClosed
	{
		position: relative;
	}
	
	.navTabs .navTab.PopupClosed .navLink
	{
		color: rgb(196, 225, 255);
	}
	
		.navTabs .navTab.PopupClosed:hover
		{
			background-color: #2672c0;
			color: #ffffff;
		}
		
			.navTabs .navTab.PopupClosed .navLink:hover
			{
				color: #ffffff;
			}
		
	.navTabs .navTab.PopupClosed .arrowWidget
	{
		/* circle-arrow-down-light */
		background-position: -64px 0;
	}
	
	.navTabs .navTab.PopupClosed .SplitCtrl
	{
		margin-left: -14px;
		width: 14px;
	}
		
		.navTabs .navTab.PopupClosed:hover .SplitCtrl
		{
			/* nav_menu_gadget, height: 17px */
			background: transparent url('styles/brivium/NamChelsea/xenforo/xenforo-ui-sprite.png') no-repeat -128px 17.5px;
		}
	
	/* ---------------------------------------- */
	/* selected tab */

	.navTabs .navTab.selected .navLink
	{
		background: url('styles/brivium/NamChelsea/extra/arrow-02.png') center 40px no-repeat;
		position: relative;
		color: #ffffff;

	}
	
	.navTabs .navTab.selected .SplitCtrl
	{
		display: none;
	}
	
	.navTabs .navTab.selected .arrowWidget
	{
		/* circle-arrow-down */
		background-position: -32px 0;
	}
	
		.navTabs .navTab.selected.PopupOpen .arrowWidget
		{
			/* circle-arrow-up */
			background-position: -16px 0;
		}
	
	/* ---------------------------------------- */
	/* unselected tab, popup open */
	
	.navTabs .navTab.PopupOpen .navLink
	{
	}
	
	
	/* ---------------------------------------- */
	/* selected tab, popup open (account) */
	
	.navTabs .navTab.selected.PopupOpen .navLink
	{
		/*color: rgb(150,150,150);
		background-color: #2672c0;
		border-bottom-right-radius: 0px;
		border-bottom-left-radius: 0px;
		_color: rgb(150,150,150);
		*/
/*text-shadow: 1px 1px 2px white;
		border-top-left-radius: 3px;
		border-top-right-radius: 3px;*/

	}
	
/* ---------------------------------------- */
/* Second Row */

.navTabs .navTab.selected .tabLinks
{
	
	
	width: 100%;	
	padding: 0;
	border: none;
	overflow: hidden; zoom: 1;	
	position: absolute;
	left: 0px;	
	top: 50px;
	height: 50px;
	background-position: 0px -50px;
	*clear:expression(style.width = document.getElementById('navigation').offsetWidth + 'px', style.clear = "none", 0);
}

	.navTabs .navTab.selected .blockLinksList
	{
		background: none;
		padding: 0;
		border: none;
	}

	.withSearch .navTabs .navTab.selected .blockLinksList
	{
		margin-right: 275px;
	}

	.navTabs .navTab.selected .tabLinks .menuHeader
	{
		display: none;
	}
	
	.navTabs .navTab.selected .tabLinks li
	{
		float: left;
		padding: 2px 0;
		margin-left: 8px;
	}
	
		.navTabs .navTab.selected .tabLinks a
		{
			font-size: 14px;
color: rgb(196, 225, 255);
padding: 0 10px;
display: block;
text-transform: none;

			
			line-height: 46px; 
		}
		
		.navTabs .navTab.selected .tabLinks .PopupOpen a
		{
			color: inherit;
			text-shadow: none;
		}
		
			.navTabs .navTab.selected .tabLinks a:hover,
			.navTabs .navTab.selected .tabLinks a:focus
			{
				text-decoration: underline;

			}
			
			.navTabs .navTab.selected .tabLinks .Popup a:hover,
			.navTabs .navTab.selected .tabLinks .Popup a:focus
			{
				color: inherit;
				background: none;
				border-color: transparent;
				border-radius: 0;
				text-shadow: none;
			}
	
/* ---------------------------------------- */
/* Alert Balloons */
	
.navTabs .navLink .itemCount
{
	font-weight: bold;
font-size: 9px;
color: white;
background-color: #e03030;
padding: 0 2px;
border-radius: 2px;
position: absolute;
right: 0;
top: 0;
line-height: 16px;
min-width: 12px;
_width: 12px;
text-align: center;
text-shadow: none;
white-space: nowrap;
word-wrap: normal;
box-shadow: 2px 2px 5px rgba(0,0,0, 0.25);
height: 16px;

}

	.navTabs .navLink .itemCount .arrow
	{
		border: 3px solid transparent;
border-top-color: #e03030;
border-bottom: 1px none black;
position: absolute;
bottom: -3px;
right: 4px;
line-height: 0px;
text-shadow: none;
/* Hide from IE6 */
width: 0px;
height: 0px;

	}
	
.navTabs .navLink .itemCount.Zero
{
	display: none;
}

.navTabs .navLink .itemCount.ResponsiveOnly
{
	display: none !important;
}

.NoResponsive #VisitorExtraMenu_Counter,
.NoResponsive #VisitorExtraMenu_ConversationsCounter,
.NoResponsive #VisitorExtraMenu_AlertsCounter
{
	display: none !important;
}
	
/* ---------------------------------------- */
/* Account Popup Menu */

	.navTabs .navTab.account .navLink .accountUsername
	{
		display: block;
		max-width: 100px;
		overflow: hidden;
		text-overflow: ellipsis;
	}

#AccountMenu
{
	width: 274px;
	border-radius: 2px;
}

#AccountMenu .menuHeader
{
	position: relative;
}

	#AccountMenu .menuHeader .avatar
	{
		float: left;
		margin-right: 10px;
	}

	#AccountMenu .menuHeader .visibilityForm
	{
		margin-top: 10px;
		color: rgb(21, 25, 34);
	}
	
	#AccountMenu .menuHeader .links .fl
	{
		position: absolute;
		bottom: 10px;
		left: 120px;
	}

	#AccountMenu .menuHeader .links .fr
	{
		position: absolute;
		bottom: 10px;
		right: 10px;
	}
	
#AccountMenu .menuColumns
{
	overflow: hidden; zoom: 1;
	padding: 2px;
}

	#AccountMenu .menuColumns ul
	{
		float: left;
		padding: 0;
		max-height: none;
		overflow: hidden;
	}

		#AccountMenu .menuColumns a,
		#AccountMenu .menuColumns label
		{
			width: 115px;
		}

#AccountMenu .statusPoster textarea
{
	width: 245px;
	margin: 0;
	resize: vertical;
	overflow: hidden;
}

#AccountMenu .statusPoster .submitUnit
{
	margin-top: 5px;
	text-align: right;
}

	#AccountMenu .statusPoster .submitUnit .statusEditorCounter
	{
		float: left;
		line-height: 23px;
		height: 23px;
	}
	
/* ---------------------------------------- */
/* Inbox, Alerts Popups */

.navPopup
{
	width: 260px;
	border-radius: 2px;
}

.navPopup a:hover,
.navPopup .listItemText a:hover
{
	background: none;
	text-decoration: underline;
}

	.navPopup .menuHeader .InProgress
	{
		float: right;
		display: block;
		width: 20px;
		height: 20px;
	}

.navPopup .listPlaceholder
{
	max-height: 350px;
	overflow: auto;
}

	.navPopup .listPlaceholder ol.secondaryContent
	{
		padding: 0;
	}

		.navPopup .listPlaceholder ol.secondaryContent.Unread
		{
			background-color: rgb(255, 255, 200);
		}

.navPopup .listItem
{
	overflow: hidden; zoom: 1;
	padding: 5px 10px;
	border-bottom: 1px solid rgb(222, 230, 238);
}

.navPopup .listItem:last-child
{
	border-bottom: none;
}

.navPopup .PopupItemLinkActive:hover
{
	background-color: rgb(196, 225, 255);
	cursor: pointer;
}

.navPopup .avatar
{
	float: left;
}

	.navPopup .avatar img
	{
		width: 32px;
		height: 32px;
	}

.navPopup .listItemText
{
	margin-left: 45px;
}

	.navPopup .listItemText .muted
	{
		font-size: 9px;
	}

	.navPopup .unread .listItemText .title,
	.navPopup .listItemText .subject
	{
		font-weight: bold;
	}

.navPopup .sectionFooter .floatLink
{
	float: right;
}


@media (max-width:610px)
{
	.Responsive .navTabs
	{
	}

	.Responsive .withSearch .navTabs .navTab.selected .blockLinksList
	{
		margin-right: 50px;
	}
}

@media (max-width:480px)
{
	.Responsive.hasJs .navTabs:not(.showAll) .publicTabs .navTab:not(.selected):not(.navigationHiddenTabs)
	{
		display: none;
	}
}

@media (max-width: 320px)
{
	.Responsive .withSearch .navTabs .navTab.selected .blockLinksList
	{
		margin-right: 0;
	}
	
	.Responsive .navTabs .navTab.selected .tabLinks li
	{
		margin-left: 0;
	}
	
	.Responsive .navTabs .navTab.selected .tabLinks a
	{
		font-size: 12px;
		padding: 0 8px;
	}
}



#searchBar
{
	position: relative;
	zoom: 1;
	z-index: 52; /* higher than breadcrumb arrows */
}

	#QuickSearchPlaceholder
	{
		position: absolute;
		right: 20px;
		top: -33px;
		display: none;
		border-radius: 5px;
		cursor: pointer;
		font-size: 11px;
		height: 16px;
		width: 16px;
		box-sizing: border-box;
		text-indent: -9999px;
		background: transparent url('styles/brivium/NamChelsea/xenforo/xenforo-ui-sprite.png') no-repeat -144px 0px;
		overflow: hidden;
	}

	#QuickSearch
	{
		display: block;
		
		position: absolute;
		right: 0;
		top: -170px;
		margin: 0;		
		background: rgb(255, 255, 255);
		border-radius: 5px;
		z-index: 7500;
	}
			
		#QuickSearch .secondaryControls
		{
			display: none;
		}
	
		#QuickSearch.active
		{
			box-shadow: 5px 5px 25px rgba(0,0,0, 0.5);
			padding-bottom: 5px;
		}
		
	#QuickSearch .submitUnit .button
	{
		min-width: 0;
		height: 26px;
		line-height: 26px;
		width: 108px;
	}
		
	#QuickSearch input.button.primary
	{
		float: left;
	}
	
	#QuickSearch #commonSearches
	{
		float: right;
		height: 26px;
	}
	
		#QuickSearch #commonSearches .button
		{
			width: 23px;
			padding: 0;
		}
		
			#QuickSearch #commonSearches .arrowWidget
			{
				margin: 0;
				float: left;
				margin-left: 4px;
				margin-top: 4px;
			}
	
	#QuickSearch .moreOptions
	{
		display: block;
		margin: 0 24px 0 112px;
		width: auto;
	}
	
/* disable icon search on chrome */	
input[type="search"]::-webkit-search-decoration,
input[type="search"]::-webkit-search-cancel-button,
input[type="search"]::-webkit-search-results-button,
input[type="search"]::-webkit-search-results-decoration {
  display: none;
}	


@media (max-width:610px)
{
	.Responsive #QuickSearchPlaceholder
	{
		display: block;
	}

	.Responsive #QuickSearchPlaceholder.hide
	{
		visibility: hidden;
	}

	.Responsive #QuickSearch
	{
		display: none;
	}

	.Responsive #QuickSearch.show
	{
		display: block;
	}
}


/** move the header to the top again **/

#headerMover
{
	position: relative;
	zoom: 1;
}

	#headerMover #headerProxy
	{
		background-color: rgb(14, 62, 110);
		height: 200px; /* +2 borders */
	}

	#headerMover #header
	{
		width: 100%;
		position: absolute;
		top: 0px;
		left: 0px;
	}


/** Generic page containers **/

.pageWidth
{
	padding-right: 20px;
padding-left: 20px;
margin: 0 auto;
_

	_

	_

	_
	
	_

	_

	_

	_

	_

	_

	_

	_

	_

	_

	_

	_

	_

	_

	_

	_

	_

	_

	_

	_

	_

	_

	_

	_

	_

	_

	_

	_
_width: 1180px;
_margin: 0 auto;
box-sizing: border-box;
max-width: 1330px;

}

.NoResponsive body
{
	min-width: 976px;
}

#content .pageContent
{
	padding: 0;
margin-bottom: 15px;

	position: relative;
}

/* clearfix */ #content .pageContent { zoom: 1; } #content .pageContent:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

/* sidebar structural elements */

.mainContainer
{
	 float: left;
	 margin-right: -328px;
	 width: 100%;
}

	.mainContent
	{
		margin-right: 328px;
	}

.sidebar
{
	float: right;
	font-size: 12px;
width: 310px;

}







/* visitor panel */

.sidebar .visitorPanel
{
	overflow: hidden; zoom: 1;
}

	.sidebar .visitorPanel h2 .muted
	{
		display: none;
	}

	.sidebar .visitorPanel .avatar
	{
		width: 66px;
height: 66px;

		
		width: auto;
		height: auto;
		display: block;
		float: left;
	}
	
		.sidebar .visitorPanel .avatar img
		{
			display: block;
			width: 66px;
			height: 66px;
		}
	
	.sidebar .visitorPanel .username
	{
		font-size: 14px;
font-weight: 600;

	}
	
	.sidebar .visitorPanel .stats
	{
		padding: 0 0 0 10px;
margin-top: 2px;

	}
	
	.sidebar .visitorPanel .stats .pairsJustified,
	.sidebar .visitorPanel .stats .pairsJustified dt
	{
		line-height: normal;
	}

	.sidebar .section .secondaryContent
	{
		border: 1px solid rgb(222, 230, 238);
	}
	
	.sidebar .section.visitorPanel .secondaryContent
	{
		border-radius: 2px;
	}
	
	.sidebar .section.loginButton .secondaryContent
	{
	}
	
	.sidebar .section .secondaryContent h3
	{
		background-color: rgb(234, 240, 246);	
		border-left: 2px solid #1f5fa1;
		border-bottom: 1px solid rgb(222, 230, 238);
	}
	
	.sidebar .visitorPanel .secondaryContent
	{
		display: block;
	}
	
	.sidebar .visitorPanel .secondaryContent .visitorText
	{
		float: left;
		width: 152px;
	}
	
	.sidebar .visitorPanel .secondaryContent .visitorText h2
	{
		margin: 0 0 0 10px;
	}











	
/* generic sidebar blocks */
		
.sidebar .section .primaryContent   h3,
.sidebar .section .secondaryContent h3,
.profilePage .mast .section.infoBlock h3
{
	font-size: 14px;
color: rgb(40, 40, 40);
padding: 10px 10px 10px 11px;
margin: -10px -10px 10px -11px;

}

.profilePage .mast .section.infoBlock h3
{
	background-color: rgb(234, 240, 246);	
	border-left: 2px solid #1f5fa1;
	border-bottom: 1px solid rgb(222, 230, 238);
	color: rgb(31, 95, 161);
}

.sidebar .section .primaryContent   h3 a,
.sidebar .section .secondaryContent h3 a
{
	font-size: 14px;
color: rgb(40, 40, 40);
}

/*
.sidebar .section .secondaryContent h3
{
	margin: -10px;
	margin-bottom: 10px;
	padding: 10px;
}
*/

.sidebar .section .secondaryContent h3,
.sidebar .section .secondaryContent h3 a
{
	color: rgb(31, 95, 161);
	font-size: 14px;
	text-transform: uppercase;
}

.sidebar .section .secondaryContent .footnote,
.sidebar .section .secondaryContent .minorHeading
{
	color: rgb(150,150,150);
margin-top: 5px;

}

	.sidebar .section .secondaryContent .minorHeading a
	{
		color: rgb(150,150,150);
	}












/* list of users with 32px avatars, username and user title */

.sidebar .avatarList li
{
	padding: 10px 0;
overflow: hidden;
zoom: 1;

	border-top: 1px solid #E0E4E8;	
}

.sidebar .avatarList li:first-child
{
	border-top: 0;
}

	.sidebar .avatarList .avatar
	{
		margin-right: 10px;
float: left;
width: 32px;
height: 32px;

		
		width: auto;
		height: auto;
	}
		
	.sidebar .avatarList .avatar img
	{
		display: block;
		width: 45px;
		height: 45px;
		_width: 32px;
		_height: 32px;
	}
	
	.sidebar .avatarList .username
	{
		font-size: 13px;
margin-top: 2px;
display: block;

	}
	
	.sidebar .avatarList .userTitle
	{
		font-size: 12px;
color: rgb(150,150,150);

	}


.sidebar .section.avatarList h3
{
	margin-bottom: 0;
}

.sidebar .avatarList .avatar.Av1s + .username 
{
	border: none;
}

.sidebar .sectionFooter
{
	margin: 10px 0;
}







/* list of users */

.sidebar .userList
{
}

.sidebar .username
{
	color: rgb(21, 25, 34);
}
	.sidebar .userList .username
	{
		font-size: 13px;

	}

	.sidebar .userList .username.invisible
	{
		color: rgb(31, 95, 161);

	}
	
	.sidebar .userList .username.followed
	{
		
	}

	.sidebar .userList .moreLink
	{
		display: block;
	}
	
	
	
	
/* people you follow online now */

.followedOnline
{
	margin-top: 3px;
margin-bottom: -5px;
overflow: hidden;
zoom: 1;

}

.followedOnline li
{
	margin-right: 5px;
margin-bottom: 5px;
float: left;

}

	.followedOnline .avatar
	{
		width: 32px;
height: 32px;

		
		width: auto;
		height: auto;
	}
	
		.followedOnline .avatar img
		{
			width: 32px;
			height: 32px;
		}
	
	
	

	
	
/* call to action */

#SignupButton
{
	background-color: white;
padding: 3px;
margin: 10px 30px;
border: 1px solid rgb(31, 95, 161);
border-radius: 2px;
text-align: center;
line-height: 30px;
box-shadow: 0px 2px 5px rgba(0,0,0, 0.2);
display: block;
cursor: pointer;
height: 30px;

}

	#SignupButton .inner
	{
		font-size: 12pt;
font-family: ;
color: #ffffff;
background: rgb(31, 95, 161) url('styles/brivium/NamChelsea/xenforo/gradients/form-button-white-25px.png') repeat-x center -7px;
border-radius: 2px;
font-weight: 600;
display: block;

	}
	
	#SignupButton:hover .inner
	{
		text-decoration: none;

	}
	
	#SignupButton:active
	{
		box-shadow: 0 0 3px rgba(0,0,0, 0.2);
/*position: relative;
		top: 2px;*/

	}


@media (max-width:800px)
{
	.Responsive .mainContainer
	{
		 float: none;
		 margin-right: 0;
		 width: auto;
	}

		.Responsive .mainContent
		{
			margin-right: 0;
		}
	
	.Responsive .sidebar
	{
		float: none;
		margin: 0 auto;
	}

		.Responsive .sidebar .visitorPanel
		{
			display: none;
		}
}

@media (max-width:340px)
{
	.Responsive .sidebar
	{
		width: 100%;
	}
}


/** Text used in message bodies **/

.messageText
{
	font-size: 15px;
line-height: 1.4;

}

	.messageText img,
	.messageText iframe,
	.messageText object,
	.messageText embed
	{
		max-width: 100%;
	}

/** Link groups and pagenav container **/

.pageNavLinkGroup
{
	display: table;
	*zoom: 1;
	table-layout: fixed;
	box-sizing: border-box;
	
	font-size: 11px;
margin: 10px 0;
line-height: 20px;

}

opera:-o-prefocus, .pageNavLinkGroup
{
	display: block;
	overflow: hidden;
}

	.pageNavLinkGroup:after
	{
		content: ". .";
		display: block;
		word-spacing: 99in;
		overflow: hidden;
		height: 0;
		font-size: 0.13em;
		line-height: 0;
	}

	.pageNavLinkGroup .linkGroup
	{
		float: right;
	}

.linkGroup
{
}
	
	.linkGroup a
	{
		padding: 0;

	}

		.linkGroup a.inline
		{
			padding: 0;
		}

	.linkGroup a,
	.linkGroup .Popup,
	.linkGroup .element
	{
		margin-left: 10px;
		display: block;
		float: left;
		
	}
	
		.linkGroup .Popup a
		{
			margin-left: -2px;
			margin-right: -5px;
			*margin-left: 10px;
			padding: 0 5px;
		}

	.linkGroup .element
	{
		padding: 3px 0;
	}

/** Call to action buttons **/

a.callToAction
{
	background-color: rgb(31, 95, 161);
border-radius: 2px;
display: inline-block;
line-height: 28px;
outline: 0 none;
vertical-align: top;
height: 28px;

	
}

	a.callToAction span
	{
		font-size: 10pt;
color: #ffffff;
padding: 0 15px;
display: block;
/*text-shadow: 0px 0px 3px rgb(21, 25, 34);*/

	}
	
	a.callToAction:hover
	{
		text-decoration: none;
		background: rgb(97, 177, 236);
	}

		a.callToAction:hover span
		{
			
		}
		
		a.callToAction:active
		{
			/*position: relative;
			top: 2px;*/
			background: rgb(97, 177, 236);
		}
		
		a.callToAction:active span
		{
			
		}

/*********/

.avatarHeap
{
	zoom: 1;
}

	.avatarHeap ol
	{
		overflow: hidden;
	}
	
		.avatarHeap li
		{
			float: left;
			margin-right: 4px;
			margin-top: 4px;
		}
		
/*********/

.fbWidgetBlock .fb_iframe_widget,
.fbWidgetBlock .fb_iframe_widget > span,
.fbWidgetBlock .fb_iframe_widget iframe
{
	width: 100% !important;
}

/*********/

.tagBlock
{
	margin: 10px 0;
	font-size: 11px;
}

.tagList,
.tagList li
{
	display: inline;
}


.tagList .tag
{
	position: relative;
	display: inline-block;
	background: rgb(222, 230, 238);
	margin-left: 9px;
	height: 14px;
	line-height: 14px;
	padding: 1px 4px 1px 6px;
	border: 1px solid rgb(196, 225, 255);
	border-left: none;
	border-radius: 4px;
	border-top-left-radius: 0;
	border-bottom-left-radius: 0;
	color: rgb(21, 25, 34);
	font-size: 11px;
	margin-bottom: 2px;
}

	.tagList .tag:hover
	{
		text-decoration: none;
		background-color: rgb(37, 44, 59);
	}

	.tagList .tag .arrow
	{
		position: absolute;
		display: block;
		height: 2px;
		width: 0;
		left: -9px;
		top: -1px;
		border-style: solid;
		border-width: 8px 9px 8px 0;
		border-color: transparent;
		border-right-color: rgb(196, 225, 255);
	}

		.tagList .tag .arrow:after
		{
			content: '';
			position: absolute;
			display: block;
			height: 2px;
			width: 0;
			left: 1px;
			top: -7px;
			border-style: solid;
			border-width: 7px 8px 7px 0;
			border-color: transparent;
			border-right-color: rgb(222, 230, 238);
		}

		.tagList .tag:hover .arrow:after
		{
			border-right-color: rgb(37, 44, 59);
		}

	.tagList .tag:after
	{
		content: '';
		position: absolute;
		left: -2px;
		top: 6px;
		display: block;
		height: 3px;
		width: 3px;
		border-radius: 50%;
		border: 1px solid rgb(196, 225, 255);
		background: rgb(255, 255, 255);
	}

/* User name classes */

.username .style3
{
	display: inline;
    overflow: hidden;
    line-height: 16px;
    color: black;
    font-size: 14px;
    font-weight: bold;
    text-transform: capitalize;
margin-left: 4px;
}

.username .style5
{
	display: inline;
    overflow: hidden;
    line-height: 16px;
    color: black;
    font-size: 14px;
    font-weight: bold;
    text-transform: capitalize;
margin-left: 4px;
}

.username .style2
{
	display: inline;
    overflow: hidden;
    line-height: 16px;
    color: black;
    font-size: 14px;
    font-weight: bold;
    text-transform: capitalize;
margin-left: 4px;
}

.username .style6
{
	display: inline;
    overflow: hidden;
    line-height: 16px;
    color: red;
    font-size: 14px;
    font-weight: bold;
    text-transform: capitalize;
margin-left: 4px;
}

.username .style7
{
	display: inline;
    overflow: hidden;
    line-height: 16px;
    color: green;
    font-size: 14px;
    font-weight: bold;
    text-transform: capitalize;
margin-left: 4px;
}


.username .banned
{
	text-decoration: line-through;
}

.prefix
{
	font-size: 11px;
background-color: transparent;
padding: 0px 6px;
margin: -1px 0;
border: 1px solid transparent;
border-radius: 4px;
display: inline-block;
font-weight: 600;
line-height: 20px;

}

a.prefixLink:hover
{
	text-decoration: none;
}

a.prefixLink:hover .prefix
{
	
}

.prefix a { color: inherit; }

.prefix.prefixPrimary    { color: rgb(21, 25, 34); background-color: rgb(37, 44, 59); border-color: rgb(37, 44, 59); }
.prefix.prefixSecondary  { color: #8f6c3f; background-color: rgb(234, 240, 246); border-color: rgb(234, 240, 246); }

.prefix.prefixRed        { color: rgb(40, 40, 40); background-color: #f5455c; border-color: #f5455c; }
.prefix.prefixGreen      { color: rgb(40, 40, 40); background-color: #faffe7; border-color: #a1c71f; }
.prefix.prefixOlive      { color: rgb(40, 40, 40); background-color: olive; border-color: olive; }
.prefix.prefixLightGreen { color: rgb(40, 40, 40); background-color: lightgreen; border-color: lightgreen; }
.prefix.prefixBlue       { color: rgb(40, 40, 40); background-color: #e4f4ff; border-color: #3fb0ff; }
.prefix.prefixRoyalBlue  { color: rgb(40, 40, 40); background-color: royalblue; border-color: #81A9E1;  }
.prefix.prefixSkyBlue    { color: rgb(40, 40, 40); background-color: skyblue; border-color: skyblue; }
.prefix.prefixGray       { color: rgb(40, 40, 40); background-color: gray; border-color: #AAA; }
.prefix.prefixSilver     { color: rgb(40, 40, 40); background-color: silver; border-color: silver; }
.prefix.prefixYellow     { color: rgb(40, 40, 40); background-color: yellow; border-color: #E0E000; }
.prefix.prefixOrange     { color: rgb(40, 40, 40); background-color: #fff2e4; border-color: #ff8400; }

.discussionListItem .prefix,
.searchResult .prefix
{
	font-size: 15px;
color: rgb(40, 40, 40);
padding: 0 8px;
margin-right: 5px;
border-radius: 3px;
display: inline-block;
font-weight: 600;

}

h1 .prefix
{
	font-size: 15px;
color: rgb(40, 40, 40);
padding: 0 8px;
margin-right: 5px;
border-radius: 3px;
display: inline-block;
font-weight: 600;

	
	line-height: normal;
}

.breadcrumb span.prefix,
.heading span.prefix
{
	font-style: italic;
font-weight: bold;
padding: 0;
margin: 0;
border: 0 none black;
border-radius: 0;
display: inline;

	color: inherit;
}

.userBanner
{
	font-size: 11px;
	/*background: transparent url('styles/brivium/NamChelsea/xenforo/gradients/form-button-white-25px.png') repeat-x top;
	padding: 1px 5px;
	border: 1px solid transparent;
	border-radius: 3px;
	box-shadow: 1px 1px 3px rgba(0,0,0, 0.25);*/
	text-align: center;
}

	.userBanner.wrapped
	{
		border-top-right-radius: 0;
		border-top-left-radius: 0;
		position: relative;
	}
		
		.userBanner.wrapped span
		{
			position: absolute;
			top: -4px;
			width: 5px;
			height: 4px;
			/*background-color: inherit;*/
		}
		
		.userBanner.wrapped span.before
		{
			border-top-left-radius: 3px;
			left: 0px;
			background: url('styles/brivium/NamChelsea/extra/spanBefore.png') no-repeat;
			background-size: 5px 4px;
		}
		
		.userBanner.wrapped span.after
		{
			border-top-right-radius: 3px;
			right: 0px;
			background: url('styles/brivium/NamChelsea/extra/spanAfter.png') no-repeat;
			background-size: 5px 4px;
		}
		
.userBanner.bannerHidden { background: none; box-shadow: none; border: none; }
.userBanner.bannerHidden.wrapped { margin-left: 0; margin-right: 0; }
.userBanner.bannerHidden.wrapped span { display: none; }

.userBanner.bannerStaff { color: #ffffff; background-color: rgb(31, 95, 161); padding: 5px 0; font-size: 12px; /*border-color: rgb(196, 225, 255);*/ }
.userBanner.bannerStaff.wrapped span {/* background-color: rgb(196, 225, 255);*/ }

.userBanner.bannerPrimary { color: rgb(21, 25, 34); background-color: rgb(37, 44, 59); border-color: rgb(196, 225, 255); }
.userBanner.bannerPrimary.wrapped span { background-color: rgb(196, 225, 255); }

.userBanner.bannerSecondary { color: #8f6c3f; background-color: rgb(234, 240, 246); border-color: rgb(234, 240, 246); }
.userBanner.bannerSecondary.wrapped span { background-color: rgb(234, 240, 246); }

.userBanner.bannerRed        { color: white; background-color: red; border-color: #F88; }
.userBanner.bannerRed.wrapped span { background-color: #F88; }

.userBanner.bannerGreen      { color: white; background-color: green; border-color: green; }
.userBanner.bannerGreen.wrapped span { background-color: green; }

.userBanner.bannerOlive      { color: black; background-color: olive; border-color: olive; }
.userBanner.bannerOlive.wrapped span { background-color: olive; }

.userBanner.bannerLightGreen { color: black; background-color: lightgreen; border-color: lightgreen; }
.userBanner.bannerLightGreen.wrapped span { background-color: lightgreen; }

.userBanner.bannerBlue       { color: white; background-color: blue; border-color: #88F; }
.userBanner.bannerBlue.wrapped span { background-color: #88F; }

.userBanner.bannerRoyalBlue  { color: white; background-color: royalblue; border-color: #81A9E1;  }
.userBanner.bannerRoyalBlue.wrapped span { background-color: #81A9E1; }

.userBanner.bannerSkyBlue    { color: black; background-color: skyblue; border-color: skyblue; }
.userBanner.bannerSkyBlue.wrapped span { background-color: skyblue; }

.userBanner.bannerGray       { color: black; background-color: gray; border-color: #AAA; }
.userBanner.bannerGray.wrapped span { background-color: #AAA; }

.userBanner.bannerSilver     { color: black; background-color: silver; border-color: silver; }
.userBanner.bannerSilver.wrapped span { background-color: silver; }

.userBanner.bannerYellow     { color: black; background-color: yellow; border-color: #E0E000; }
.userBanner.bannerYellow.wrapped span { background-color: #E0E000; }

.userBanner.bannerOrange     { color: black; background-color: orange; border-color: #FFC520; }
.userBanner.bannerOrange.wrapped span { background-color: #FFC520; }


@media (max-width:800px)
{
	.Responsive .pageWidth
	{
		
	}

	.Responsive #content .pageContent
	{
		padding-left: 0px;
		padding-right: 0px;
	}
}

@media (max-width:610px)
{
	.Responsive .pageWidth
	{
		
	}
	
	.Responsive .forum_view #pageDescription,
	.Responsive .thread_view #pageDescription
	{
		display: none;
	}
	
	.Responsive #headerMover #headerProxy
	{
		height: 200px;
	}
}

@media (max-width:480px)
{
	.Responsive .pageWidth
	{
		
	}
	
	.Responsive .pageNavLinkGroup .PageNav,
	.Responsive .pageNavLinkGroup .linkGroup
	{
		clear: right;
	}
}


/* GENERIC STYLE
--------------------------------------------------------- */
/* Clearfix */
.clearfix:after {
  clear: both;
  content: "";
  display: block;
  height: 0;
  visibility: hidden;
}

* html .clearfix {
  height: 1%;
}

:first-child + html .clearfix {
  min-height: 1%;
}
/* End Clearfix */

.register_form .pageContent
{
	background: rgb(255, 255, 255) !important;
}

.fa
{
	margin-right: 5px;
}
.member_notable .mainContent .section,
.online_list .section
{
	margin-top: 0;
}
.memberList .memberListItem
{
	border-left: 1px solid rgb(222, 230, 238);
	border-right: 1px solid rgb(222, 230, 238);	
}
.messageUserBlock .avatar img
{
	width: 96px;
	height: 96px;
}

#Notices .panel .noticeContent a
{
	color: red;
}

/******** Navigation Side Bar *********/
.navigationSideBar .section
{
}

.navigationSideBar  .subHeading
{
	padding: 8px 10px !important;
	margin: 0 !important;
	border-right: 0;
}

.navigationSideBar .LogOut 
{
	color: rgb(31, 95, 161);
	font-weight: bold;
}

/******** Bread Crumb **********/

.breadcrumb .crust .arrow span:before
{
	content: "/";
}
.breadcrumb .crust:last-child .arrow
{
	display: none;
}

/********* Node List Show/Hide *********/

.nodeList .category .category_toggle_container
{
	display: block;
	float: right;
	position: absolute;
	top: 0px;
	right: 0px;
	width: 39px;
	height: 43px;
	box-sizing: border-box;
	padding-top: 17px;
	padding-right: 14px;
}

.nodeList .category .category_toggle_container a.toggle_arrow.collapse
{
	background: url('styles/brivium/NamChelsea/extra/icon-sodium.png') no-repeat -5px 2px;
	text-indent: -9999px;
	float: right;
	width: 10px;
	height: 10px;
}

.nodeList .category .category_toggle_container a.toggle_arrow
{
	background: url('styles/brivium/NamChelsea/extra/icon-sodium.png') no-repeat -5px -11px;
	text-indent: -9999px;
	float: right;
	width: 10px;
	height: 10px;
}

/****** Page nav *******/

.PageNav a.text:hover
{
	background: none;
	color: rgb(31, 95, 161);
}

#exposeMask
{
	background: #000000 !important;
	opacity: 0.8 !important;
}
.xenForm .submitUnit
{
	border: none;
}

.node .linkNodeInfo .nodeText
{
	margin-right: 10px;
}

.sidebar .visitorPanel .secondaryContent
{
	overflow: hidden;
}

{
	line-height: inherit;
	margin-top: -5px;
	padding-bottom: 7px;
}
 
 
 
 
.message .messageInfo
{
	margin: 0 !important;
}
 
 
 
 
.quickReply .messageUserBlock .arrow
{
	top: 10px;
	left: 123px;
	border: 10px solid transparent;
	border-left-color: rgb(37, 44, 59);
	-moz-border-left-colors: rgb(37, 44, 59);
	border-right: none;
}
 
.quickReply .messageUserBlock .arrow span
{
	top: -10px;
	left: -11px; 
	border: 10px solid transparent;
	border-left-color: rgb(222, 230, 238);
	-moz-border-left-colors: rgb(222, 230, 238);
	border-right: none;
}
 
 
 
 
.quickReply .messageUserInfo
{
	float: left !important;
}
 
 
 
 
.quickReply .messageUserBlock div.avatarHolder
{
	margin-right: 0 !important;
}
 
 
 
 
.messageUserBlock .userBanner
{
	position: absolute !important;
	top: 40px;
}
 
 
 
 
.messageUserBlock .userBanner.wrapped span
{
	display: none;
}
 
 
 
 
.messageUserBlock .userBanner.wrapped
{
	border-radius: 3px !important;
	margin-left: 80px;
}
 
 
 
 
.messageUserBlock .userBanner.bannerStaff
{
	margin-left: 0 !important; }

footer
{
	background-color: rgb(31, 95, 161);
}

.footer
{
	line-height: 18px;
	border-top: 2px solid rgb(243, 245, 249);
}

.footer .pageContent
{	
	padding: 20px 10px;
}

.footer h3
{
	padding: 10px 0;
	margin-bottom: 5px;
	font-size: 15px;
	font-weight: 600;
	color: rgb(97, 177, 236);
}

.footerBlock
{
	font-size: 13px;
	float: left;
}

.footerBlock > div 
{
	padding:0 10px;	
	box-sizing: border-box;
}

.footerBlock:first-child > div
{
	padding-left: 0;
}

.footerBlock:last-child > div
{
	padding-right: 0;
}

.footerBlock1
{
	width: 34%;
}

.footerBlock1 .social
{
	padding-top: 20px;
}

.footerBlock1 .social a
{
	margin-right: 3%;
	display: inline-block;
}

.footerBlock2,
.footerBlock4
{
	width: 22%;
}

.footerBlock4 ul li
{
	margin-bottom: 6px;
}

.footerBlock4 ul li .fa
{
	margin-right: 5px;
}

/********** FooterLegal ***********/

.footerLegal
{
	background-color: rgba(0,0,0,0.4);
}

.footerLegal .pageContent
{
	padding:10px;
}

.footerLegal .fa
{
	font-size: 18px;
}

.footerLegal #legal li  a
{
	margin-left: 10px;
}

.footerLinks a.globalFeed
{
	margin: 0;
}

.footerLegal #BRCopyright .muted .concealed
{
	color: rgb(233, 237, 238) !important;
}


@media (max-width:976px)
{
	.Responsive .pairsInline.debugInfo
	{
		display: none;
	}
}
@media (max-width:800px)
{
	.Responsive #copyright
	{
		float: none;
	}
	
	.Responsive #legal 
	{
		float: none;
		display: inline-block;
	}
	
	.Responsive #legal>li
	{
	}
	
	.Responsive .footerBlock1
	{
		width: 100%;
		float: none;
		display: inline-block;
		text-align: justify;
	}
	
	.Responsive .footerBlock2,
	.Responsive .footerBlock4
	{
		width: 33%;
	}
	
}
@media (max-width:610px)
{
	.Responsive #BRCopyright
	{
		float: none !important;
	}
	
}
@media (max-width:480px)
{
	.Responsive .footerBlock2,
	.Responsive .footerBlock4
	{
		float: none;
		width: 90%;
		margin: auto;	
		text-align: center;
		margin-top: 10px;
	}
	
	.Responsive .footerBlock1 h3
	{
		text-align: center;
	}

	.Responsive #legal li
	{
		display: inline-block;
		float: none;
		vertical-align: middle;
	}
	
	.Responsive .footerBlock1 .social a
	{
		margin-right: 2%;
	}
	
}

