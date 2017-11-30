@charset "UTF-8";

/* --- MoreThread_main.css --- */

.vietxf_MoreThread{ width:100%;}
.vietxf_MoreThread .secondaryContent{ padding:0 5px 5px 25px; background:url(styles/default/xenforo/vietxf/sortnum.png) no-repeat 10px 4px #f0f7fc;}
.vietxf_MoreThread .secondaryContent li{ padding:4px 0 2px 5px;}
.vietxf_MoreThread .morethread_time{ font-size:10px; color:#999; margin-left:5px;}

/* --- andy_similarthreads.css --- */


.viewMoreBox *
{
	box-sizing:border-box;
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
}
.viewMoreBox
{
	display: block;
	position: relative;
	box-sizing:border-box;
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	font-family: Arial, sans-serif;
	margin: 2px 5px;
}
.viewMoreBox > .leftBox
{
	display: block;
	width: 49%;
	box-sizing:border-box;
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	float: left;
}
.viewMoreBox > .rightBox
{
	display: block;
	width: 49%;
	box-sizing:border-box;
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	float: right;
	/* position: absolute;
	top: 0px;
	right: 0px; */
}
.viewMoreBox > .leftBox > .lefthead
{
	display: block;
	width: 100%;
	background-color: #a1d281;
	padding: 8px 10px;
	border-bottom: 2px solid #fe7f34;
	font-weight: bold;
	color: 515151;
	font-size: 17px;
	box-sizing:border-box;
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	-webkit-margin-before: 0;
	-webkit-margin-after: 0;
	-webkit-margin-start: 0;
	-webkit-margin-end: 0;
}
.viewMoreBox > .rightBox > .righthead
{
	display: block;
	width: 100%;
	background-color: #a1d281;
	padding: 8px 10px;
	border-bottom: 2px solid #28b992;
	font-weight: bold;
	color: 515151;
	font-size: 17px;
	box-sizing:border-box;
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	-webkit-margin-before: 0;
	-webkit-margin-after: 0;
	-webkit-margin-start: 0;
	-webkit-margin-end: 0;
}
.viewMoreBox > .leftBox > .viewMoreList,
.viewMoreBox > .rightBox > .viewMoreList
{
	display: block;
	width: 100%;
	background-color: #f7f7f7;
	color: #505050;
	padding: 5px;
	margin: 0;
	box-sizing:border-box;
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
}
.viewMoreBox > .leftBox > .viewMoreList > .viewMoreBit,
.viewMoreBox > .rightBox > .viewMoreList > .viewMoreBit
{
	display: block;
	width: 100%;
	background-color: #f7f7f7;
	color: #505050;
	padding: 4px 0;
	font-size: 13px;
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
}
.viewMoreBox > .leftBox > .viewMoreList > .viewMoreBit > .moreBit,
.viewMoreBox > .rightBox > .viewMoreList > .viewMoreBit > .moreBit
{
	color: #505050;
	font-size: 14px;
	text-decoration: none;
}
.viewMoreBox > .leftBox > .viewMoreList > .viewMoreBit > .moreBit:hover,
.viewMoreBox > .rightBox > .viewMoreList > .viewMoreBit > .moreBit:hover
{
	color: #0A0808;
}
.viewMoreBox > .leftBox > .viewMoreList > .viewMoreBit > .date,
.viewMoreBox > .rightBox > .viewMoreList > .viewMoreBit > .date
{
	color: #bcbcbc;
	font-size: 11px;
	font-style: italic;
	display: inline;
	border: 0;
	background: none;
}
.clearBoth
{
	clear: both;
	max-height: 0px;
	height: 0px;
	line-height: 0px;
	overflow: hidden;
}
@media screen and (max-width: 800px) {
	.viewMoreBox > .leftBox,
	.viewMoreBox > .rightBox
	{
		width: 100%;
		position: static;
		margin: 2px 2;
	}
	.viewMoreBox > .rightBox
	{
		display: none;
	}
}





/* --- bb_code.css --- */

/* .bbCodeX classes are designed to exist inside .baseHtml. ie: they have no CSS reset applied */

.bbCodeBlock
{
	color: #313146;
background-color: rgb(255, 255, 255);
margin: 1em 15px 1em 0;
border: 1px solid rgb(222, 230, 238);
border-radius: 2px;

}

.bbCodeBlock.bbCodeQuote
{
	background: -moz-linear-gradient(top, #f5f5f5 0%, #ffffff 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f5f5f5), color-stop(100%,#ffffff));
	background: -webkit-linear-gradient(top, #f5f5f5 0%,#ffffff 100%);
	background: -o-linear-gradient(top, #f5f5f5 0%,#ffffff 100%);
	background: -ms-linear-gradient(top, #f5f5f5 0%,#ffffff 100%);
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f5f5f5', endColorstr='#ffffff');
	-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#f5f5f5', endColorstr='#ffffff')";
	background: linear-gradient(top, #f5f5f50%,#ffffff 100%);
	border-radius: 2px;
	border: 1px solid rgb(222, 230, 238);
}

.bbCodeBlock.bbCodeHtml
{
}

.bbCodeBlock.bbCodePHP
{
}

	.bbCodeBlock .bbCodeBlock,
	.hasJs .bbCodeBlock .bbCodeSpoilerText,
	.messageList.withSidebar .bbCodeBlock
	{
		margin-right: 0;
	}

	/* mini CSS reset */
	.bbCodeBlock pre,
	.bbCodeBlock blockquote
	{
		margin: 0;
	}
	
	.bbCodeBlock img
	{
		border: none;
	}

.bbCodeBlock .type
{
	font-size: 13px;
font-family: Arial, Helvetica, sans-serif;
color: rgb(40, 40, 40);
padding: 8px;
border-bottom: 1px solid rgb(222, 230, 238);

}

.bbCodeBlock.bbCodeHtml .type,
.bbCodeBlock.bbCodePHP .type
{
	border: 0;
	border-radius: 2px 2px 0 0;		
	background: rgb(234, 240, 246);
	border-bottom: 1px solid rgb(222, 230, 238);
}

.bbCodeBlock pre,
.bbCodeBlock .code
{
	font-size: 10pt;
font-family: Consolas, 'Courier New', Courier, monospace;
background-color: rgb(255, 255, 255);
padding: 10px;
word-wrap: normal;
overflow: auto;
line-height: 1.24;
min-height: 30px;
max-height: 500px;
_width: 600px;
direction: ltr;

}

.bbCodeBlock .code
{
	white-space: nowrap;
	overflow: auto;	
}

.bbCodeQuote
{
	overflow: auto;

}

.bbCodeQuote .attribution
{
	color: rgb(40, 40, 40);
border: 0 none black;

}

.bbCodeQuote .quoteContainer
{
	overflow: hidden;
	position: relative;
	
	font-size: 10pt;
padding: 10px;

}


	.bbCodeQuote .quoteContainer .quote
	{
		max-height: 150px;
		overflow: hidden;
		padding-bottom: 1px;
	}
	
		.NoJs .bbCodeQuote .quoteContainer .quote
		{
			max-height: none;
		}

	.bbCodeQuote .quoteContainer .quoteExpand
	{		
		display: none;
		box-sizing: border-box;
		position: absolute;
		height: 80px;
		top: 90px;
		left: 0;
		right: 0;
		
		font-size: 11px;
		line-height: 1;
		text-align: center;
		color: #f9bc6d;
		cursor: pointer;
		padding-top: 65px;
		background: -webkit-linear-gradient(top,  0%,  80%);
		background: -moz-linear-gradient(top,  0%,  80%);
		background: -o-linear-gradient(top,  0%,  80%);
		background: linear-gradient(to bottom,  0%,  80%);
		
		border-bottom-left-radius: ;
		border-bottom-right-radius: ;
	}
	
	.bbCodeQuote .quoteContainer .quoteExpand.quoteCut
	{
		display: block;
	}
	
	.bbCodeQuote .quoteContainer.expanded .quote
	{
		max-height: none;
	}
	
	.bbCodeQuote .quoteContainer.expanded .quoteExpand
	{
		display: none;
	}


	.bbCodeQuote img
	{
		max-height: 150px;
	}
	
	.bbCodeQuote iframe,
	.bbCodeQuote .fb_iframe_widget,
	.bbCodeQuote object,
	.bbCodeQuote embed
	{
		max-width: 200px;
		max-height: 150px;
	}
	
	.bbCodeQuote iframe:-webkit-full-screen
	{
		max-width: none;
		max-height: none;
	}
	
	.bbCodeQuote iframe:-moz-full-screen
	{
		max-width: none;
		max-height: none;
	}
	
	.bbCodeQuote iframe:-ms-fullscreen
	{
		max-width: none;
		max-height: none;
	}
	
	.bbCodeQuote iframe:fullscreen
	{
		max-width: none;
		max-height: none;
	}
	
.bbCodeSpoilerButton
{
	margin: 5px 0;
	max-width: 99%;
}

	.bbCodeSpoilerButton > span
	{
		display: inline-block;
		max-width: 100%;
		white-space: nowrap;
		text-overflow: ellipsis;
		overflow: hidden;
	}
	
.hasJs .bbCodeSpoilerText
{
	display: none;
	background-color: rgb(222, 230, 238);
padding: 5px;
margin-top: 5px;
margin-right: 150px;
margin-bottom: 5px;
border: 1px solid rgb(37, 44, 59);
border-radius: 5px;
overflow: auto;

}

	.hasJs .bbCodeSpoilerText .bbCodeSpoilerText,
	.hasJs .bbCodeSpoilerText .bbCodeBlock,
	.hasJs .messageList.withSidebar .bbCodeSpoilerText
	{
		margin-right: 0;
	}
	
.NoJs .bbCodeSpoilerContainer
{
	background-color: rgb(40, 40, 40); /* fallback for browsers without currentColor */
	background-color: currentColor;
}

	.NoJs .bbCodeSpoilerContainer > .bbCodeSpoilerText
	{
		visibility: hidden;
	}

	.NoJs .bbCodeSpoilerContainer:hover
	{
		background-color: transparent;
	}
	
		.NoJs .bbCodeSpoilerContainer:hover > .bbCodeSpoilerText
		{
			visibility: visible;
		}


@media (max-width:800px)
{
	.Responsive .bbCodeBlock,
	.Responsive.hasJs .bbCodeSpoilerText
	{
		margin-right: 0;
	}
}


/* --- bbm_buttons.css --- */

span.mce_bbm_hl {background-position:-760px 0 !important}
span.mce_bbm_raw {background-position:-260px 0 !important}
span.mce_bbm_spoiler {
	background:url(styles/sedo/editor/adv_sprites.png) no-repeat 0 0 !important;
}

/* --- dark_azucloud.css --- */

.dark_azucloud_terms { margin-top: 5px; }
.dark_azucloud_terms * { font-weight: normal; font-size: 11px; display: inline; }
.dark_azucloud_terms h2 { font-weight: bold; font-size: 16px; }
.dark_azucloud_terms h3 { font-weight: bold; font-size: 14px; }
.dark_azucloud_terms h4 { font-weight: normal; font-size: 13px; }
.dark_azucloud_terms strong { font-weight: normal; font-size: 12px; }

/* --- discussion_list.css --- */

.discussionList
{
	position: relative;
	zoom: 1;
}

/** column style and width **/

.discussionList .sectionHeaders,
.discussionListItem
{
	display: table;
	table-layout: fixed;
	width: 100%;
	word-wrap: normal;
}

	.discussionList .sectionHeaders dt,
	.discussionList .sectionHeaders dd,
	.discussionListItem .listBlock
	{
		display: table-cell;
		vertical-align: middle;
	}
	
		.discussionList .posterAvatar
		{
			width: 52px;
		}
		
		.discussionList .main
		{
			width: auto;
		}

			.discussionList .sectionHeaders .main .postDate
			{
				text-align: right;
			}
		
		.discussionList .stats
		{
			width: 140px;
		}
			
			.discussionList .sectionHeaders .stats .minor
			{
				text-align: right;
			}
		
		.discussionList .lastPost
		{
			width: 150px;
			text-align: right;
			overflow: hidden;
		}
		
		.discussionList .statsLastPost /* combined last two columns */
		{
			width: 290px;
		}
	

/* column headers */

.discussionList .sectionHeaders
{	
	font-size: 14px;
color: rgb(31, 95, 161);
background-color: rgb(234, 240, 246);
padding: 11px 15px;
margin: 0;
border: 1px solid rgb(222, 230, 238);
border-left: 2px solid rgb(31, 95, 161);
box-sizing: border-box;

	
	padding: 0;
}

	.discussionList .sectionHeaders dt span
	{
		display: none !important;
	}
		
	.discussionList .sectionHeaders a
	{
		display: block;
		color: rgb(31, 95, 161);
		outline: none;
	}
	
	.discussionList .sectionHeaders a:hover
	{
		text-decoration: none;
	}
			
	.discussionList .sectionHeaders dd a[href]:hover
	{
		text-decoration: none;
/*background-color: #fff4e5;*/

	}
		
	.discussionList .sectionHeaders .main a,
	.discussionList .sectionHeaders .stats a
	{
		float: left;
		width: 50%;
		white-space: nowrap;
	}
	
		.discussionList .sectionHeaders a span
		{
			padding: 11px 15px;
			display: block;
		}
		
/** IE <8 **/
.discussionList .sectionHeaders,
.discussionListItem                { *display: block; _vertical-align: bottom; }
.discussionList .sectionHeaders dt,
.discussionList .sectionHeaders dd,
.discussionListItem .listBlock     { *display: block; *float: left; }
.discussionListItem .listBlock     { _height: 52px; *min-height: 52px; } /* todo: should be calculation */
.discussionList .posterAvatar      { *width: 6.98%; }
.discussionListItem .posterAvatar  { *font-size: 0; }	
.discussionList .main              { *width: 56.98%; }
.discussionList .stats             { *width: 15.97%; }	
.discussionList .lastPost          { *width: 19.97%; }
.discussionList .statsLastPost     { *width: 35.97%; }
.discussionList .sectionHeaders dt,
.discussionList .sectionHeaders dd { *padding: 5px 0; }
.discussionList .sectionHeaders a,
.discussionList .sectionHeaders a span { *display: inline !important; *float: none !important; }

/* items in thread list */

.discussionListItems
{
}



	
/* individual thread list item */
	
/** main **/

.discussionListItem
{
	background-color: rgb(255, 255, 255);
	
	border-bottom: 1px solid rgb(222, 230, 238);
}





	/* sections, section widths */
	
		.discussionListItem .posterAvatar,		
		.discussionListItem .stats
		{
			background-color: rgb(255, 255, 255);
		}
		
		.discussionListItem .main,
		.discussionListItem .lastPost
		{
		}
		
		
		
		
		
		
		
		
	/* avatar section */
	
	.discussionListItem .posterAvatar .avatarContainer
	{
		display: block;
		position: relative;
	}
	
	.discussionListItem .posterAvatar .avatar
	{
		padding: 0;
display: block;
width: 36px;
height: 36px;

		
		width: auto;
		height: auto;
	}
	
		.discussionListItem .posterAvatar .avatar img
		{
			width: 36px;
			height: 36px;
			display: block;
		}
		
		.discussionListItem .posterAvatar .miniMe
		{
			padding: 0;
position: absolute;
bottom: 1px;
left: 29px;
z-index: 10;

		}
		
			.discussionListItem .posterAvatar .miniMe img
			{
				padding: 1px;
border: 1px none black;
border-radius: 2px;
box-shadow: 1px 1px 5px rgba(0,0,0, 0.5);
width: 20px;
height: 20px;
				
			}		
		
		
	/* title, poster section */
	
	.discussionListItem .titleText
	{
		padding: 5px;
		overflow: hidden; zoom: 1;
		position: relative;
	}
	
		/* unread indicator */
		
		.LoggedIn .discussionListItem .titleText
		{			
			padding-left: 20px;
		}
		
		.LoggedIn .discussionListItem .unreadLink,
		.LoggedIn .discussionListItem .ReadToggle
		{
			display: block;
			width: 10px;
			height: 10px;
			
			position: absolute;
			left: 5px;
			top: 10px;
			
			background: url('styles/brivium/NamChelsea/xenforo/xenforo-ui-sprite.png') no-repeat 10000px 0;
			
			white-space: nowrap;
			overflow: hidden;
			text-indent: 9999px;
		}
		
			.LoggedIn .discussionListItem .unreadLink,
			.LoggedIn .discussionListItem.unread .ReadToggle
			{
				background-position: -5px -42px;
			}
		
			.LoggedIn .discussionListItem .ReadToggle:hover
			{
				background-position: -25px -42px;
			}
	
		/* first row */
	
		.discussionListItem .title
		{
			font-size: 14px;
line-height: 25px;

			max-width: 100%;
			word-wrap: break-word;
		}
		
			.discussionListItems .unread .title a
			{
				font-weight: bold;
/*padding-right: 18px;
				background: transparent url('styles/brivium/NamChelsea/xenforo/widgets/discussion-new.png') no-repeat right center;*/

			}
			
		
		.discussionListItem .iconKey span
		{
			margin-left: 5px;
text-indent: -10000em;
float: right;
background: transparent url('styles/brivium/NamChelsea/xenforo/xenforo-ui-sprite.png') no-repeat 10000px 0;
width: 16px;
height: 16px;

		}
			
			.discussionListItem .iconKey .sticky    { background-position:   0px -16px; }
			.discussionListItem .iconKey .starred   { background-position: -90px -32px; width: 18px; height: 18px; }
			.discussionListItem .iconKey .watched   { background-position: -144px -16px; width: 16px; height: 16px; }
			.discussionListItem .iconKey .locked    { background-position: -16px -16px; }
			.discussionListItem .iconKey .moderated { background-position: -32px -16px; }
			.discussionListItem .iconKey .redirect  { background-position: -48px -16px; }
			.discussionListItem .iconKey .new       { background-position: -64px -16px; }
		
		/* second row */
		
		.discussionListItem .secondRow
		{
			font-size: 12px;

			clear: both;
		}
		
			.discussionListItem .secondRow .controls
			{
				float: right;
				padding-left: 20px;
			}
				
				.discussionListItem.AjaxProgress .controls
				{
					background: transparent url('styles/brivium/NamChelsea/xenforo/widgets/ajaxload.info_B4B4DC_facebook.gif') no-repeat left center;
				}
			
			.discussionListItem .posterDate
			{
				float: left;
			}
			
			
			
	/* stats section */
	
	.discussionListItem .stats dl
	{
		padding: 0 10px;
		border-left: 1px solid rgb(37, 44, 59);
		border-right: 1px solid rgb(37, 44, 59);
	}
		.discussionListItem .stats .major
		{
			font-size: 14px;
line-height: 25px;

			
			margin-top: 5px;
		}
			
		.discussionListItem .stats .minor
		{
			font-size: 12px;

			
			margin-bottom: 5px;
		}
			
	/* last post section */
	
	.discussionListItem .lastPostInfo
	{
		padding: 5px;
	}
	
		.discussionListItem .lastPostInfo .username
		{
			font-size: 14px;
line-height: 25px;

		}
		
	
			.discussionListItems .unread .lastPostInfo .username
			{
				font-weight: bold;
/*padding-right: 18px;
				background: transparent url('styles/brivium/NamChelsea/xenforo/widgets/discussion-new.png') no-repeat right center;*/

			}
		
		.discussionListItem .lastPostInfo .dateTime
		{
			font-size: 12px;

		}


/* extra note row */

.discussionListItem .noteRow
{
	background-color: rgb(255, 255, 255);
	padding: 5px;
	text-align: center;
	font-size: 11px;
	color: rgb(21, 25, 34);
}

	.discussionListItem .noteRow.secondary
	{
		background-color: rgb(255, 255, 255);
	}




/* deleted item */

.discussionList .discussionListItem.deleted
{
}

	.discussionList .discussionListItem.deleted .avatar img
	{
		opacity: 0.5;
		filter: alpha(opacity='50');
	}
		
	.discussionList .discussionListItem.deleted .deletionNote
	{
		float: left;
		color: rgb(150,0,0);
	}
		
/* moderated item */

.discussionList .discussionListItem.moderated .listBlock
{
	background-color: rgb(255, 255, 255);
}

		
		
		
		
		
			
/* inline mod selected/checked classes */

.discussionListItem.InlineModChecked,
.discussionListItem.InlineModChecked .posterAvatar,
.discussionListItem.InlineModChecked .main,
.discussionListItem.InlineModChecked .stats,
.discussionListItem.InlineModChecked .lastPost,
.discussionListItem.deleted.InlineModChecked,
.discussionListItem.moderated.InlineModChecked
{
	background-color: rgb(255, 255, 200);

}
















		
/** bottom summary **/

.discussionList .sectionFooter
{
	overflow: hidden; zoom: 1;
}

	.discussionList .sectionFooter .contentSummary
	{
		float: left;
		display: block;
	}

		
/** thread list options **/

.DiscussionListOptions
{
	background-color: rgb(255, 255, 255);
margin: 0 10px 10px;
border: 1px solid rgb(222, 230, 238);
border-radius: 2px;
line-height: 20px;
overflow: hidden;
zoom: 1;

}

.hasJs .DiscussionListOptions
{
	display: none;
}

	.DiscussionListOptions dl,
	.DiscussionListOptions .controlGroup
	{
		float: left;
		margin-right: 10px;
		
		overflow: hidden; zoom: 1;
	}
	
		.DiscussionListOptions dt
		{
			float: left;
		}
		
		.DiscussionListOptions dd
		{
			margin-left: 120px;
		}
		
	.DiscussionListOptions .buttonGroup
	{
		float: right;
	}
	
		.DiscussionListOptions .buttonGroup input
		{
			min-width: 75px;
		}
	
#DiscussionListOptionsHandle
{
	position: absolute;
bottom: -20px;
line-height: 19px;
text-align: center;
right: 50%;
white-space: nowrap;

}
	
	#DiscussionListOptionsHandle a
	{
		font-size: 9pt;
color: rgb(150,150,150);
background-color: rgb(255, 255, 255);
padding: 0 20px;
margin: 0 auto;
border: 1px solid rgb(222, 230, 238);
border-top: 1px none black;
border-bottom-right-radius: 2px;
border-bottom-left-radius: 2px;
display: inline-block;
outline: 0;
position: relative;
right: -50%;

	}
	
.afterDiscussionListHandle
{
	margin-top: 20px;
}
	
/** item page nav **/

.discussionListItem .itemPageNav
{
	visibility: hidden;
}

.discussionListItem:hover .itemPageNav,
.Touch .discussionListItem .itemPageNav
{
	visibility: visible;
}

	.itemPageNav a,
	.itemPageNav span
	{
		font-size: 9px;
padding: 0 3px;
border-radius: 3px;
display: inline-block;
text-align: center;

	}
	
	body .itemPageNav a
	{
		color: #8f6c3f;
background: #fff4e5 url('styles/brivium/NamChelsea/xenforo/gradients/category-23px-light.png') repeat-x;
margin: -1px 0;
border: 1px solid rgb(234, 240, 246);

	}
	
	body .itemPageNav a:hover
	{
		color: #8f6c3f;
text-decoration: none;
background-color: rgb(234, 240, 246);
border-color: #f9bc6d;

	}

/** filters **/
		
.discussionListFilters
{
	font-size: 11px;
	overflow: hidden; zoom: 1;
}

	.discussionListFilters .filtersHeading
	{
		float: left;
		margin-right: 5px;
		color: rgb(97, 177, 236);
		font-weight: bold;
	}
	
	.discussionListFilters .removeFilter,
	.discussionListFilters .removeAllFilters
	{
		color: rgb(21, 25, 34);
		background: rgb(37, 44, 59) url('styles/brivium/NamChelsea/xenforo/gradients/form-button-white-25px.png') repeat-x top;
		border: 1px solid rgb(37, 44, 59);
		border-radius: 5px;
		padding: 2px 10px;
	}
	
		.discussionListFilters .gadget
		{
			color: rgb(97, 177, 236);
			font-weight: bold;
			margin-left: 3px;
		}

	
		.discussionListFilters .removeFilter:hover,
		.discussionListFilters .removeAllFilters:hover
		{
			background-color: rgb(222, 230, 238);
			text-decoration: none;
			color: rgb(150,150,150);
			box-shadow: 1px 1px 5px rgba(0,0,0, 0.15);
		}
		
	.discussionListFilters .pairsInline dt
	{
		display: none;
	}
	
	.discussionListFilters .filterPairs
	{
		float: left;
	}
	
	.discussionListFilters .removeAll
	{
		float: right;
	}
	
		.discussionListFilters .removeAllFilters
		{
			padding: 2px 6px;
		}


@media (max-width:610px)
{
	.Responsive .discussionList .sectionHeaders .stats
	{
		display: none;
	}
	
	.Responsive .discussionList .sectionHeaders .main .title
	{
		float: none;
		width: auto;
	}
	
	.Responsive .discussionList .sectionHeaders .main .postDate
	{
		display: none;
	}
	
	.Responsive .discussionList .statsLastPost
	{
		display: none;
	}

	.Responsive .discussionListItem .listBlock.main,
	.Responsive .discussionListItem .listBlock.stats,
	.Responsive .discussionListItem .listBlock.lastPost
	{
		display: block;
	}
	
	.Responsive .discussionListItem .listBlock.stats
	{
		float: left;
		width: auto;
		margin-top: -5px;
		border: none;
		background: none;
		padding-left: 5px;
	}
	
		.Responsive.LoggedIn .discussionListItem .listBlock.stats
		{			
			padding-left: 20px;
		}
	
		.Responsive .discussionListItem .listBlock.stats dl
		{
			border: none;
			padding: 0;
		}
		
		.Responsive .discussionListItem .listBlock.stats dd,
		.Responsive .discussionListItem .listBlock.stats dt
		{
			float: none;
			display: inline;
		}
	
		.Responsive .discussionListItem .listBlock.stats .minor
		{
			display: none;
		}
		
		.Responsive .discussionListItem .listBlock.stats .major
		{
			font-size: 11px;
			margin-top: 0;
		}
	
	.Responsive .discussionListItem .listBlock.lastPost
	{
		float: right;
		width: auto;
		margin-top: -5px;
	}
		.Responsive .discussionListItem .listBlock.lastPost .lastPostInfo
		{
			padding-top: 0;
			padding-bottom: 0;
		}
	
		.Responsive .discussionListItem .listBlock.lastPost dt
		{
			display: none;
		}
}

@media (max-width:800px)
{
	.Responsive .discussionList .sectionHeaders .lastPost,
	.Responsive .discussionList .lastPost
	{
		width: 125px;
	}
}

@media (max-width:480px)
{
	.Responsive .discussionListItem .secondRow .startDate,
	.Responsive .discussionListItem .secondRow .EditControl
	{
		display: none;
	}
}


/* --- facebook.css --- */

a.fbLogin,
#loginBar a.fbLogin
{
	display: inline-block;
	width: 180px;
	height: 22px;
	box-sizing: border-box;
	cursor: pointer;
	
	background: #29447e url('styles/brivium/NamChelsea/xenforo/connect_sprite.png');
	background-repeat: no-repeat;
	border-radius: 3px;
	background-position: left -188px;
	padding: 0px 0px 0px 1px;
	outline: none;
	
	text-decoration: none;
	color: white;
	font-weight: bold;
	font-size: 11px;
	line-height: 14px;
}

a.fbLogin:active,
#loginBar a.fbLogin:active
{
	background-position: left -210px;
}

a.fbLogin:hover,
#loginBar a.fbLogin:hover
{
	text-decoration: none;
}

	a.fbLogin span
	{
		background: #5f78ab url('styles/brivium/NamChelsea/xenforo/connect_sprite.png');
		border-top: solid 1px #879ac0;
		border-bottom: solid 1px #1a356e;
		display: block;
		padding: 2px 4px 3px;
		margin: 1px 1px 0px 21px;
		text-shadow: none;
		white-space: nowrap;
		overflow: hidden;
	}

	a.fbLogin:active span
	{
		border-bottom: solid 1px #29447e;
		border-top: solid 1px #45619d;
		background: #4f6aa3;
		text-shadow: none;
	}

/* --- hex_thread_list_thumbnails.css --- */

.discussionListItem .posterAvatar, .article .posterAvatar
{
	width: 64px;
}

.nodeInfo .posterAvatar, .article .posterAvatar {
    float: left;
}

.posterAvatar .thumbContainer {
	display: block;
	position: relative;
}

.nodeInfo .posterAvatar .thumbContainer, .article .posterAvatar .thumbContainer {
    padding: 5px;
}

.discussionListItem .posterAvatar .thumb
{
	padding: 5px;
	display: block;
}

.posterAvatar .thumb span
{
	display: block;
}

a.thumb
{ 
	*cursor: pointer; /* IE7 refuses to do this */ 
} 

.thumb span.img
{
	background-color: rgb(252, 252, 255);
	padding: 2px;
	border: 1px solid #a5cae4;
	border-radius: 4px; -webkit-border-radius: 4px; -moz-border-radius: 4px; -khtml-border-radius: 4px;

}

.ThumbnailsContainer .thumb span.img
{
	float: left;
	margin: 0 5px 5px 0;
}

.searchResult .thumb {
	float: left;
	margin: 5px 0;
}



.sidebar .avatarList .thumb {
	margin-right: 5px;
	float: left;
	width: 32px;
	height: 32px;
	width: auto;
	height: auto;
}

/* --- login_bar.css --- */

/** Login bar basics **/

#loginBar
{
	color: #ffffff;
background-color: #1C192F;
position: relative;
z-index: 1;
/*border-bottom: 1px solid rgb(31, 95, 161);*/

}

	#loginBar .ctrlWrapper
	{
		margin: 0 10px;
	}

	#loginBar .pageContent
	{
		padding-top: 5px;
		position: relative;
		_height: 0px;
	}

	#loginBar a
	{
		color: rgb(97, 177, 236);

	}

	#loginBar form
	{
		padding: 10px 0;
margin: 0 auto;
display: none;
line-height: 20px;
position: relative;

	}
	
		#loginBar .xenForm .ctrlUnit,		
		#loginBar .xenForm .ctrlUnit > dt label
		{
			margin: 0;
			border: none;
		}
	
		#loginBar .xenForm .ctrlUnit > dd
		{
			position: relative;
		}
	
	#loginBar .lostPassword,
	#loginBar .lostPasswordLogin
	{
		font-size: 11px;
	}
	
	#loginBar .rememberPassword
	{
		font-size: 11px;
	}

	#loginBar .textCtrl
	{
		color: rgb(222, 222, 222);
background: url(rgba.php?r=0&g=0&b=0&a=153); background: rgba(0,0,0, 0.6); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000,endColorstr=#99000000);
border-radius: 3px;

	}
	
	#loginBar .textCtrl[type=text]
	{
		font-weight: bold;
font-size: 11pt;

	}

	#loginBar .textCtrl:-webkit-autofill /* http://code.google.com/p/chromium/issues/detail?id=1334#c35 */
	{
		background: url(rgba.php?r=0&g=0&b=0&a=153) !important; background: rgba(0,0,0, 0.6) !important; _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000,endColorstr=#99000000);
		color: rgb(222, 222, 222);
	}

	#loginBar .textCtrl:focus
	{
		background: black none;

	}
	
	#loginBar input.textCtrl.disabled
	{
		color: rgb(196, 225, 255);
background-color: #032A46;
border-style: dashed;

	}
	
	#loginBar .button
	{
		min-width: 85px;
		*width: 85px;
	}
	
		#loginBar .button.primary
		{
			font-weight: bold;
		}
		
/** changes when eAuth is present **/

#loginBar form.eAuth
{
	-x-max-width: 700px; /* normal width + 170px */
}

	#loginBar form.eAuth .ctrlWrapper
	{
		border-right: 1px dotted rgb(21, 25, 34);
		margin-right: 200px;
		box-sizing: border-box;
	}

	#loginBar form.eAuth #eAuthUnit
	{
		position: absolute;
		top: 0px;
		right: 10px;
	}

		#eAuthUnit li
		{
			margin-top: 10px;
			line-height: 0;
		}
	
/** handle **/

#loginBar #loginBarHandle
{
	font-size: 14px;
font-family: "Myriad Pro", sans-serif;
color: #fff;
background-color: #2672c0;
padding: 10px 12px;
border-radius: 3px;
position: absolute;
right: 0;
top: 113px;
text-align: center;
line-height: 15px;
text-transform: uppercase;
z-index: 1;
height: 15px;

}


@media (max-width:800px)
{
	.Responsive #loginBar form.eAuth .ctrlWrapper
	{
		border-right: none;
		margin-right: 10px;
	}

	.Responsive #loginBar form.eAuth #eAuthUnit
	{
		position: static;
		width: 180px;
		margin: 0 auto 10px;
	}
}

@media (max-width:maxResponsiveNarrowWidth)
{
	.Responsive #loginBar #loginBarHandle
	{
		top: 5px;
	}
}

@media (max-width:320px)
{
	.Responsive #loginBar #loginBarHandle
	{
		top: 5px;
		font-size: 12px;
		padding: 2px 5px;
	}
}


/* --- message.css --- */



.messageList
{
	
}

.messageList .message
{
	padding-top: 20px;
padding-bottom: 30px;
border-top: 1px solid rgb(222, 230, 238);

}

/* clearfix */ .messageList .message { zoom: 1; } .messageList .message:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

/*** Message block ***/

.message .messageInfo
{
	color: rgb(40, 40, 40);
background-color: transparent;
padding: 0;
margin-left: 150px;
border-bottom: 1px none black;

	zoom: 1;
}

	.message .newIndicator
	{
		font-size: 11px;
color: #ffffff;
background-color: rgb(31, 95, 161);
padding: 1px 5px;
margin: -5px -5px 5px 5px;
border-radius: 3px;
display: block;
float: right;
position: relative;
box-shadow: 1px 1px 3px rgba(0,0,0, 0.25);
/*border: 1px solid rgb(97, 177, 236);*/

		
		margin-right: -0px;
	}
	
		.message .newIndicator span
		{
			border-top-right-radius: 3px;
position: absolute;
top: -4px;
right: -1px;
/*background-color: rgb(97, 177, 236);*/
width: 5px;
height: 4px;

		}

	.message .messageContent
	{
		padding-right: 2px;
padding-bottom: 2px;
padding-left: 2px;
margin-right: -2px;
margin-left: -2px;
overflow: hidden;
*zoom: 1;

	}
	
	.message .messageTextEndMarker
	{
		/*height: 0;
		font-size: 0;
		overflow: hidden;*/
	}
	
	.message .editDate
	{
		text-align: right;
		margin-top: 5px;
		font-size: 11px;
		color: rgb(150,150,150);
	}

	.message .signature
	{
		font-size: 9pt;
color: rgb(150,150,150);
padding: 5px 0 0;
margin-top: 5px;
border-top: 1px dashed rgb(196, 225, 255);

	}

	.message .messageMeta
	{
		font-size: 10pt;
padding: 15px 5px 5px;
margin: -5px;
overflow: hidden;
zoom: 1;

	}

		.message .privateControls
		{
			float: left;

		}

		.message .publicControls
		{
			float: right;

		}
		
			.message .privateControls .item
			{
				margin-right: 10px;
				float: left;
				color: rgb(31, 95, 161);
			}

			.message .privateControls .item .fa
			{
				color: rgb(31, 95, 161);
			}
			
				.message .privateControls .item:last-child
				{
					margin-right: 0;
				}

			.message .publicControls .item
			{
				margin-left: 10px;
				float: left;
				color: rgb(31, 95, 161);	
			}
			
			.message .publicControls .item.postNumber,
			.message .publicControls .item .fa
			{
				color: rgb(31, 95, 161);
			}
	
				.message .messageMeta .control
				{
					
				}
				
					.message .messageMeta .control:focus
					{
						
					}
				
					.message .messageMeta .control:hover
					{
						
					}
				
					.message .messageMeta .control:active
					{
						
					}
	/*** multiquote +/- ***/
			
	.message .publicControls .MultiQuoteControl
	{
		padding-left: 4px;
		padding-right: 4px;
		border-radius: 2px;
		margin-left: 6px;
		margin-right: -4px;
	}
	
	
	.message .publicControls .MultiQuoteControl.active
	{
		background-color: rgb(37, 44, 59);
	}
	
		.messageNotices li
	{
		font-size: 11px;
background: rgb(234, 240, 246) url('styles/brivium/NamChelsea/xenforo/gradients/form-button-white-25px.png') repeat-x top;
padding: 5px;
margin: 10px 0;
border: 1px solid rgb(234, 240, 246);
border-radius: 5px;
line-height: 16px;

	}
	
		.messageNotices .icon
		{
			float: right;
			width: 16px;
			height: 16px;
			background: url('styles/brivium/NamChelsea/xenforo/xenforo-ui-sprite.png') no-repeat 1000px 1000px;
		}
	
			.messageNotices .warningNotice .icon { background-position: -48px -32px; }		
			.messageNotices .deletedNotice .icon { background-position: -64px -32px; }		
			.messageNotices .moderatedNotice .icon {background-position: -32px -16px; }
	
	.message .likesSummary
	{
		padding: 5px;
margin-top: 10px;
border: 1px solid rgb(37, 44, 59);
border-radius: 5px;

	}
	
	.message .messageText > *:first-child
	{
		margin-top: 0;
	}

/* inline moderation changes */

.InlineModChecked .messageUserBlock,
.InlineModChecked .messageInfo,
.InlineModChecked .messageNotices,
.InlineModChecked .bbCodeBlock .type,
.InlineModChecked .bbCodeBlock blockquote,
.InlineModChecked .attachedFiles .attachedFilesHeader,
.InlineModChecked .attachedFiles .attachmentList
{
	background-color: rgb(255, 255, 200);

}

.InlineModChecked .messageUserBlock div.avatarHolder,
.InlineModChecked .messageUserBlock .extraUserInfo
{
	background: transparent;
}

.InlineModChecked .messageUserBlock .arrow span
{
	border-left-color: rgb(255, 255, 200);
}

/* message list */

.messageList .newMessagesNotice
{
	margin: 10px auto;
	padding: 5px 10px;
	border-radius: 5px;
	border: 1px solid rgb(196, 225, 255);
	background: rgb(37, 44, 59) url(styles/brivium/NamChelsea/xenforo/gradients/category-23px-light.png) repeat-x top;
	font-size: 11px;
}

/* deleted / ignored message placeholder */

.messageList .message.placeholder
{
}

.messageList .placeholder .placeholderContent
{	
	overflow: hidden; zoom: 1;
	color: rgb(31, 95, 161);
	font-size: 11px;
}

	.messageList .placeholder a.avatar
	{
		float: left;
		display: block;
	}
	
		.messageList .placeholder a.avatar img
		{
			display: block;
			width: 32px;
			height: 32px;
		}
		
	.messageList .placeholder .privateControls
	{
		margin-top: -5px;
	}
	

/* messages remaining link */

.postsRemaining a,
a.postsRemaining
{
	font-size: 11px;
	color: rgb(150,150,150);
}


@media (max-width:800px)
{
	.Responsive .message .newIndicator
	{
		margin-right: 0;
		border-top-right-radius: 3px;
	}
	
		.Responsive .message .newIndicator span
		{
			display: none;
		}
}

@media (max-width:480px)
{
	.Responsive .message .messageInfo
	{
		margin-left: 0;
		padding: 0 10px;
	}

	.Responsive .message .messageContent
	{
		min-height: 0;
	}	

	.Responsive .message .newIndicator
	{
		margin-right: -5px;
		margin-top: -16px;
	}

	.Responsive .message .postNumber,
	.Responsive .message .authorEnd
	{
		display: none;
	}
	
	.Responsive .message .signature
	{
		display: none;
	}
	
	.Responsive .messageList .placeholder a.avatar
	{
		margin-right: 10px;
	}
}


/* --- message_user_info.css --- */

{
	margin-bottom: 20px;

}
 
 
 
 
	.messageUserBlock
	{
		background: #f2f6f8 url('styles/brivium/NamChelsea/xenforo/gradients/tab-selected-light.png') repeat-x bottom;
border: 1px solid rgb(37, 44, 59);
border-radius: 5px;
height: 122px;

		margin-bottom: 15px;
 
		position: relative;
	}
 
		.messageUserBlock div.avatarHolder
		{
			background-color: rgb(222, 230, 238);
padding: 10px;
margin-right: 15px;
border-radius: 4px;
float: left;

	 
			position: relative;
		}
 
			.messageUserBlock div.avatarHolder .avatar
			{
				display: block;
				font-size: 0;
			}
	 
			.messageUserBlock div.avatarHolder .onlineMarker
			{
				position: absolute;
				top: 9px;
				left: 9px;
		 
				border: 7px solid transparent;
border-top-color: rgb(127, 185, 0);
border-left-color: rgb(127, 185, 0);
border-top-left-radius: 5px;
border-top-right-radius: 3px;
border-bottom-left-radius: 3px;

			}
	 
		.messageUserBlock h3.userText
		{
			padding: 6px;

		}
 
		.messageUserBlock .userBanner:last-child
		{
			margin-bottom: 0;
		}
		.messageUserBlock a.username
		{
			font-weight: bold;
display: inline;
overflow: hidden;
line-height: 16px;

	 
		}
 
		.messageUserBlock .userTitle
		{
			font-size: 11px;
margin-bottom: 1px;
display: block;

		}
 
		.messageUserBlock .extraUserInfo
		{
			font-size: 10px;
padding: 1px 10px;
margin: -80px 0 -58px;
border-radius: 4px;
float: right;
height: 105px;

		}
					 
			.messageUserBlock .extraUserInfo img
			{
				max-width: 100%;
			}
 
		.messageUserBlock .arrow
		{
			position: absolute;
			top: 123px;
			left: 10px;
	 
			display: block;
			width: 0px;
			height: 0px;
			line-height: 0px;
	 
			border: 10px solid transparent;
			border-top-color: rgb(37, 44, 59);
			-moz-border-top-colors: rgb(37, 44, 59);
	 
			/* Hide from IE6 */
			_display: none;
		}
 
			.messageUserBlock .arrow span
			{
				position: absolute;
				top: -11px;
				left: -10px;
		 
				display: block;
				width: 0px;
				height: 0px;
				line-height: 0px;
		 
				border: 10px solid transparent;
				border-top-color: rgb(222, 230, 238);
				-moz-border-top-colors: rgb(222, 230, 238);
			}
 
 
 
 

@media (max-width:480px)
{
	.Responsive .messageUserInfo
	{
		float: none;
		width: auto;
	}
 
 
 
 
	.Responsive .messageUserBlock
	{
		margin-bottom: 5px;
		position: relative;
		height: 64px;
	}
 
 
 
 
	.Responsive .messageUserBlock div.avatarHolder
	{
		float: left;
		padding: 5px;
	}
 
 
 
 
		.Responsive .messageUserBlock div.avatarHolder .avatar img
		{
			width: 48px;
			height: 48px;
		}
 
		.Responsive .messageUserBlock div.avatarHolder .onlineMarker
		{
			top: 4px;
			left: 4px;
			border-width: 6px;
		}
 
 
 
 
	.Responsive .messageUserBlock h3.userText
	{
		margin-left: 64px;
	}
	.Responsive .messageUserBlock .userBanner
	{
		max-width: 150px;
		margin-right: 0;
		border-top-left-radius: 3px;
		border-top-right-radius: 3px;
		position: static;
		display: inline-block;
	}
		.Responsive .messageUserBlock .userBanner span
		{
			display: none;
		}
 
 
 
 
	.Responsive .messageUserBlock .extraUserInfo
	{
		display: none;
	}
	.Responsive .messageUserBlock .arrow
	{
		top: 65px;
	}
} 


/* --- node_list.css --- */

.nodeList { zoom: 1; }
.nodeList .node {
	zoom: 1;
	vertical-align: bottom;
}

.nodeList .node.level_1
{
	margin-bottom: 18px;
}

.nodeList .node.level_1:last-child
{
	margin-bottom: 0;
}

.nodeList .node.groupNoChildren + .node.groupNoChildren
{
	margin-top: -20px;
}

.node .nodeInfo
{
	overflow: hidden; zoom: 1;
	position: relative;
}

	.node .nodeInfo.primaryContent,
	.node .nodeInfo.secondaryContent
	{
		padding: 0;
	}

.node .nodeIcon
{
	margin: 10px 0 10px 10px;
float: left;
width: 36px;
height: 36px;
	
}

	.node .forumNodeInfo .nodeIcon,
	.node .categoryForumNodeInfo .nodeIcon
	{
		background-image: url('styles/brivium/NamChelsea/xenforo/node-sprite.png');
background-repeat: no-repeat;
background-position: 0 0;

	}

	.node .forumNodeInfo.unread .nodeIcon,
	.node .categoryForumNodeInfo.unread .nodeIcon
	{
		background: transparent url('styles/brivium/NamChelsea/xenforo/node-sprite.png') no-repeat -36px 0;

	}

	.node .pageNodeInfo .nodeIcon
	{
		background-image: url('styles/brivium/NamChelsea/xenforo/node-sprite.png');
background-repeat: no-repeat;
background-position: -72px 0;

	}

	.node .linkNodeInfo .nodeIcon
	{
		background: transparent url('styles/brivium/NamChelsea/xenforo/node-sprite.png') no-repeat -108px 0;

	}

.node .nodeText
{
	margin: 10px 270px 10px 56px;

}

	.node .nodeText .nodeTitle
	{	
		font-size: 10pt;

	}
	
	.node .nodeText .nodeTitle a
	{
		color: rgb(21, 25, 34);
		font-weight: 600;
		font-size: 15px;
	}
	
	.node .nodeLastPost .lastThreadTitle a
	{
		color: rgb(21, 25, 34);
		font-weight: 600;
		font-size: 13px;
	}	
	
		.node .unread .nodeText .nodeTitle
		{
			font-weight: bold;

		}

	.node .nodeDescription
	{
		font-size: 11px;

	}
	
	.hasJs .node .nodeDescriptionTooltip
	{
		/* will be shown as a tooltip */
		display: none;
	}
	
	.Touch .node .nodeDescriptionTooltip
	{
		/* touch browsers don't see description tooltips */
		display: block;
	}

	.node .nodeStats
	{
		font-size: 11px;
margin-top: 2px;

	}
	
	.node .nodeExtraNote
	{
		text-align: right;
		font-size: 11px;
		color: rgb(150,150,150);
	}
	
	.node .subForumList
	{
		overflow: hidden; *zoom: 1;
		margin: -5px 0 10px;
		margin-left: 56px;
	}
	
		.node .subForumList li
		{
			float: left;
			width: 31%;
			margin: 2px 0 2px 2%;
		}
		
			.node .subForumList li .nodeTitle
			{
				font-size: 11px;
				overflow: hidden;
				white-space: nowrap;
				word-wrap: normal;
				text-overflow: ellipsis;
			}
			
			.node .subForumList .unread .nodeTitle
			{
				font-weight: bold;

			}
		
			.node .subForumList li ol,
			.node .subForumList li ul
			{
				display: none;
			}

.node .nodeLastPost
{
	background-color: rgb(255, 255, 255);
padding: 10px;
border-bottom: 1px solid rgb(222, 230, 238);

	
	font-size: 9pt;
padding: 5px 10px;
margin: 10px;
position: absolute;
top: 0;
right: 0;
line-height: 18px;
white-space: nowrap;
word-wrap: normal;
overflow: hidden;
/*border: 1px solid rgb(37, 44, 59);
	border-radius: 3px;*/
width: 210px;
height: 30px;

	background: none;
	border: none;
}

.node .nodeLastPost .lastThreadTitle
{
	text-overflow: ellipsis;
	max-width: 100%;
	display: block;
	overflow: hidden;
}

	.node .nodeLastPost .lastThreadMeta
	{
		display: block;
	}

	.node .nodeLastPost .noMessages
	{
		line-height: 28px;
	}

.node .nodeControls
{
	position: absolute;
	top: 0;
	right: 240px;
	margin: 20px 0;
}

	.node .tinyIcon
	{
		background: transparent url('styles/brivium/NamChelsea/xenforo/xenforo-ui-sprite.png') no-repeat -112px -16px;
margin: 1px 4px;
display: block;
white-space: nowrap;
text-indent: 9999px;
overflow: hidden;
opacity: 0.25;
width: 14px;
height: 14px;

	}

	.node .nodeInfo:hover .tinyIcon[href],
	.Touch .node .tinyIcon
	{
		opacity: 1;

	}

		/*.node .feedIcon
		{
			background: transparent url('styles/brivium/NamChelsea/xenforo/xenforo-ui-sprite.png') no-repeat -112px -16px;
		}*/

/* description tooltip */

.nodeDescriptionTip
{
	padding: 4px 10px;
margin-top: -22px;
line-height: 1.5;
width: 350px;
height: auto;

}

	.nodeDescriptionTip .arrow
	{
		border: 6px solid transparent;
border-right-color: #a1c71f;
border-left: 1px none black;
top: 6px;
left: -6px;
bottom: auto;

	}
	
	.nodeDescriptionTip.arrowBottom .arrow
	{
		top: auto;
		left: 10px;
		bottom: -6px;
		border: 6px solid transparent;
		border-top-color: #a1c71f;
		border-bottom: 1px none black;
	}
	
/* main area - used for L2 categories and most other nodes */

.nodeList .categoryForumNodeInfo,
.nodeList .forumNodeInfo,
.nodeList .pageNodeInfo,
.nodeList .linkNodeInfo
{
	background-color: rgb(255, 255, 255);
padding: 10px;
border-bottom: 1px solid rgb(222, 230, 238);

	
	padding: 0;
}

.nodeList li:last-child .categoryForumNodeInfo,
.nodeList li:last-child .forumNodeInfo,
.nodeList li:last-child .pageNodeInfo,
.nodeList li:last-child .linkNodeInfo
{
	border-bottom: 0;
}

/* category strip - used for L1 categories and group headers */

.nodeList .categoryStrip
{
	font-size: 14px;
color: rgb(31, 95, 161);
background-color: rgb(234, 240, 246);
padding: 11px 15px;
margin: 0;
border: 1px solid rgb(222, 230, 238);
border-left: 2px solid rgb(31, 95, 161);
box-sizing: border-box;

	
	background-color: rgb(31, 95, 161);
padding: 11px 15px;
margin: 0;
border: 1px solid rgb(222, 230, 238);
min-height: 18px;

}

	.nodeList .categoryStrip .nodeTitle
	{
		font-size: 18px;
color: #000000;
font-weight: 600;

	}
	
		.nodeList .categoryStrip .nodeTitle a
		{
			color: rgba(255, 255, 255, 0.94);
		}

	.nodeList .categoryStrip .nodeDescription
	{
		font-size: 10px;
color: rgba(233, 233, 233, 0.86);

	}
	
		.nodeList .categoryStrip .nodeDescription a
		{
			color: rgba(233, 233, 233, 0.86);
		}

.nodeList .node.groupNoChildren + .node.groupNoChildren .categoryStrip
{
	display: none;
}

/* node stats area */

.nodeStats
{
	overflow: hidden; zoom: 1;
}

.nodeStats dl,
.subForumsPopup
{
	float: left;
	display: block;
	margin-right: 3px;
}

.subForumsPopup.Popup .PopupControl.PopupOpen
{
	background: rgb(31, 95, 161);
	color: #ffffff;
	border-radius: 2px;
}

.subForumsPopup a.PopupControl
{
	padding-left: 5px;
	padding-right: 5px;
}

.subForumsPopup .dt
{
	color: rgb(150,150,150);
}

.subForumsPopup .PopupOpen .dt
{
	color: #ffffff;
}

.subForumsMenu .node .node /* for depths 2+ */
{
	padding-left: 10px;
}

	.subForumsMenu .node .nodeTitle
	{
		font-size: 11px;
	}
	
	.subForumsMenu .node .unread .nodeTitle
	{
		font-weight: bold;

	}
	
/** new discussion button below nodelist **/

.nodeListNewDiscussionButton
{
	margin-top: 10px;
	text-align: right;
}


@media (max-width:610px)
{
	.Responsive .node .nodeText
	{
		margin-right: 0;
	}
	
	.Responsive.Touch .node .nodeDescriptionTooltip,
	.Responsive .node .nodeDescription
	{
		display: none;
	}

	.Responsive .node .nodeLastPost
	{
		position: static;
		height: auto;
		width: auto;
		background: none;
		border: none;
		padding: 0;
		margin: -8px 0 10px 56px;
	}
	
		.Responsive .node .nodeLastPost .noMessages 
		{
			display: none;
		}
		
		.Responsive .node .nodeLastPost .lastThreadTitle,
		.Responsive .node .nodeLastPost .lastThreadUser
		{
			display: none;
		}
				
		.Responsive .node .nodeLastPost .lastThreadDate:before
		{
			content: attr(data-latest);
		}

	.Responsive .node .nodeControls
	{
		display: none;
	}
		
	.Responsive .node .subForumList
	{
		display: none;
	}
	
	.Responsive .nodeDescriptionTip
	{
		width: auto;
		max-width: 350px;
	}
}

@media (max-width:480px)
{
	.Responsive .subForumsPopup
	{
		display: none;
	}
}


/* --- share_page.css --- */

.sharePage
{
	background: rgb(255, 255, 255);
	border: 1px solid #eaeaea;
	border-radius: 2px;
	padding: 15px;
}

/* clearfix */ .sharePage { zoom: 1; } .sharePage:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

	.sharePage .shareControl
	{
		float: left;

	}
	
	.sharePage .tweet
	{
		margin-right: 30px;
	}

	.sharePage .facebookLike .label
	{
		font-size: 11px;
		line-height: 24px;
		float: left;
		margin-right: 7px;
		display: none;
	}
	
	.sharePage iframe
	{
		height: 20px;
	}
	
	.sharePage .facebookLike iframe
	{
		z-index: 52;
	}
	



@media (max-width:480px)
{
	.Responsive .sharePage
	{
		display: none;
	}
}


/* --- thread_view.css --- */

.thread_view .threadAlerts
{
	border: 1px solid rgb(37, 44, 59);
	border-radius: 5px;
	font-size: 11px;
	margin: 10px 0;
	padding: 5px;
	line-height: 16px;
	background-image: url('styles/brivium/NamChelsea/xenforo/gradients/form-button-white-25px.png');
}
	
	.thread_view .threadAlerts dt
	{
		color: rgb(97, 177, 236);
		display: inline;
	}
	
	.thread_view .threadAlerts dd
	{
		color: #2b485c;
		font-weight: bold;
		display: inline;
	}
	
		.thread_view .threadAlerts .icon
		{
			float: right;
			width: 16px;
			height: 16px;
			margin-left: 5px;
			background: url('styles/brivium/NamChelsea/xenforo/xenforo-ui-sprite.png') no-repeat -1000px -1000px;
		}
		
			.thread_view .threadAlerts .deletedAlert .icon { background-position: -64px -32px; }
			.thread_view .threadAlerts .moderatedAlert .icon { background-position: -32px -16px; }
			.thread_view .threadAlerts .lockedAlert .icon { background-position: -16px -16px; }
	
.thread_view .threadAlerts + * > .messageList
{
	border-top: none;
}

.thread_view .threadNotices
{
	background-color: rgb(222, 230, 238);
	border: 1px solid rgb(196, 225, 255);
	border-radius: 5px;
	padding: 10px;
	margin: 10px auto;
}

.thread_view .InlineMod
{
	overflow: hidden; zoom: 1;
}

/* --- wf_default.css --- */



.section.sectionMain.widget-container.widget-tabs {
	border: 0;
	margin: 0;
	padding: 0;
}
	.section.sectionMain.widget-container.widget-tabs .widget-panes {
		padding: 10px;;
		border-right: 1px solid rgb(196, 225, 255);
		border-bottom: 1px solid rgb(196, 225, 255);
		border-left: 1px solid rgb(196, 225, 255);

		
		border-bottom-left-radius: 10px;
		border-bottom-right-radius: 10px;
	}

.widget-tabs .tabs {
	background: none;
}

.widget-tabs .tabs li a {
	font-weight: bold;
}

.widget-tabs .primaryContent {
	padding: 0;
	background: none;
	border: 0;
}

.widget-poll .pollBlock .pollContent {
	padding-left: 0;
	width: auto;
}

.widget-poll .pollBlock .pollOptions,
.widget-poll .pollBlock .pollResults {
	border: 0;
}

.widget-poll .pollBlock .pollResult h3.optionText {
	border: 0;
	overflow: hidden;
	text-overflow: ellipsis;
	white-space: nowrap;
}

.widget-poll .pollBlock .pollResult .count {
	padding: 0;
}

.avatarList .WidgetFramework_nextToAvatar {
	margin-left: 41px;
}
	.avatarList .WidgetFramework_nextToAvatar .username {
		margin-top: 0;
	}

.widget .statusPoster textarea {
	box-sizing: border-box;
	width: 100%;
	margin: 0;
	resize: vertical;
	overflow: hidden;
}

.WidgetFramework_WidgetRenderer_ShareThisPage .sharePage .shareControl {
    float: none;
}

.WidgetFramework_WidgetRenderer_FeedReader_Entries {
}
	.WidgetFramework_WidgetRenderer_FeedReader_Entries .limitedHeight {
		max-height: 59px; 
	}

	.WidgetFramework_WidgetRenderer_FeedReader_Entries .WidgetFramework_WidgetRenderer_FeedReader_Entry {
		text-align: justify;
		display: block;
		overflow: hidden;
		margin-bottom: 3px;
	}

	.WidgetFramework_WidgetRenderer_FeedReader_Entries img.WidgetFramework_WidgetRenderer_FeedReader_Thumbnail {
		width: auto;
		float: right;
		margin-left: 3px;
	}
		.WidgetFramework_WidgetRenderer_FeedReader_Entries .WidgetFramework_WidgetRenderer_FeedReader_Entry:nth-child(2n) img.WidgetFramework_WidgetRenderer_FeedReader_Thumbnail { float: left; margin-right: 3px; }

.WidgetFramework_WidgetRenderer_XFRM_Resources .Hint {
	float: right;
}

.WidgetFramework_WidgetRenderer_Threads .unread > a { font-weight: bold; }
.sidebar .WidgetFramework_WidgetRenderer_Threads .avatarList .username { display: inline; font-size: inherit; margin: 0; }

.WidgetFramework_WidgetRenderer_Threads_FullThreadList {
}
	.WidgetFramework_WidgetRenderer_Threads_FullThreadList .subHeading {
		font-size: 1.3em;
	}
	.WidgetFramework_WidgetRenderer_Threads_FullThreadList .info {
		padding: 5px 10px;

		
			border-top: 1px dashed rgb(37, 44, 59);
		
	}
		.WidgetFramework_WidgetRenderer_Threads_FullThreadList .counters {
			float: right;
		}
	.WidgetFramework_WidgetRenderer_Threads_FullThreadList .message {
		margin-bottom: 10px;
	}
	/* clearfix */ .WidgetFramework_WidgetRenderer_Threads_FullThreadList .message { zoom: 1; } .WidgetFramework_WidgetRenderer_Threads_FullThreadList .message:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }
		.WidgetFramework_WidgetRenderer_Threads_FullThreadList .messageInfo {
			padding: 5px 10px;
		}
		.WidgetFramework_WidgetRenderer_Threads_FullThreadList .message .newIndicator
		{
			font-size: 11px;
color: #ffffff;
background-color: rgb(31, 95, 161);
padding: 1px 5px;
margin: -5px -5px 5px 5px;
border-radius: 3px;
display: block;
float: right;
position: relative;
box-shadow: 1px 1px 3px rgba(0,0,0, 0.25);
/*border: 1px solid rgb(97, 177, 236);*/


			margin-right: -5px;
		}
			.WidgetFramework_WidgetRenderer_Threads_FullThreadList .message .newIndicator span
			{
				border-top-right-radius: 3px;
position: absolute;
top: -4px;
right: -1px;
/*background-color: rgb(97, 177, 236);*/
width: 5px;
height: 4px;

			}

	.WidgetFramework_WidgetRenderer_Threads_FullThreadList .messageText .readMoreLink {
		display: block;
		text-align: right;
	}

.WidgetFramework_WidgetRenderer_ProfilePosts_ProfilePostItem
{
	overflow: hidden; zoom: 1;

	margin: 5px 0;
	padding-top: 5px;
	border-top: 1px solid rgb(37, 44, 59);
}

.WidgetFramework_WidgetRenderer_ProfilePosts_ProfilePostItem:first-child
{
	border-top: none;
	padding-top: 0;
}

.WidgetFramework_WidgetRenderer_ProfilePosts_ProfilePostItem .avatar
{
	float: left;
	font-size: 0;
}

	.WidgetFramework_WidgetRenderer_ProfilePosts_ProfilePostItem .avatar img
	{
		width: 24px;
		height: 24px;
	}

.WidgetFramework_WidgetRenderer_ProfilePosts_ProfilePostItem .messageInfo
{
	margin-left: 34px;
}

.WidgetFramework_WidgetRenderer_ProfilePosts_ProfilePostItem .messageContent article,
.WidgetFramework_WidgetRenderer_ProfilePosts_ProfilePostItem .messageContent blockquote
{
	display: inline;
}

.WidgetFramework_WidgetRenderer_ProfilePosts_ProfilePostItem .poster
{
	font-weight: bold;
}

.WidgetFramework_WidgetRenderer_ProfilePosts_ProfilePostItem .messageMeta
{
	overflow: hidden; zoom: 1;
	font-size: 11px;
	line-height: 14px;
	padding-top: 4px;
}

.widget .avatarHeap {
	
	margin-right: -10px;
}



/* list of users with 32px avatars, username and user title */
.non-sidebar-widget .avatarList li {
	padding: 10px 0;
overflow: hidden;
zoom: 1;

}

	.non-sidebar-widget .avatarList .avatar {
		margin-right: 10px;
float: left;
width: 32px;
height: 32px;

		
		width: auto;
		height: auto;
	}
		
	.non-sidebar-widget .avatarList .avatar img {
		width: 32px;
		height: 32px;
	}
	
	.non-sidebar-widget .avatarList .username {
		font-size: 13px;
margin-top: 2px;
display: block;

	}
	
	.non-sidebar-widget .avatarList .userTitle {
		font-size: 12px;
color: rgb(150,150,150);

	}


/* list of users */

.non-sidebar-widget .userList {
}

	.non-sidebar-widget .userList .username {
		font-size: 13px;

	}

	.non-sidebar-widget .userList .username.invisible {
		color: rgb(31, 95, 161);

	}
	
	.non-sidebar-widget .userList .username.followed {
		
	}

	.non-sidebar-widget .userList .moreLink {
		display: block;
	}


.Tinhte_XenTag_WidgetRenderer_Cloud h3 { display: none }


