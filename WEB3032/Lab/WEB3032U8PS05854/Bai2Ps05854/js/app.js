Ext.applitcation({
	name: 'Fpoly',
	
	launch: function(){
		Ext.create("Ext.tab.panel",{
			fullscreen:true,
			tabBarPosition: 'bottom',
			
			items:[
				{
					title:'Home',
					iconCls: 'home',
					html:[
						'<img src="http://staging.sencha.com/img/sencha.png"/>'
						'<h1>Welcome to FPT Polytechnic</h1>',
						"<p>Bạn hãy vào website của chúng tôi","để học cách tạo các ứng dụng mobile đơn giản</p>",
						'<h2>Sử dụng senchaTouch</h2>'
					].join("");
					
				},
				{
					xtype: 'nestedlist',
					title:'Blog',
					iconCls:'start',
					displayField:'title',
					store:{
						type:'free',
						feilds:[
							'title','link','author','contenSnippet','content',
							{name:'leaf',defaultValue: true}
						],
						root{
						leaf:false;	
						},
				},
				root:{
				leaf: false;
				}
				proxy:{
						type: 'jsonp',
						url:'https://ajax.googleapis.com/ajax/services/feed/load?v=1.0&q=http://vnexpress.net/rss/tin-moi-nhat.rss',
						reader:{
							type:'json',
							rootProperty:'responseData.feed.entries'
						}
					}
				
			],
			items:[
				{
					
					
				},
				
				},
				detailCard:{
					xtype:'panel',
				scrollable:true,
				styleHtmlContent: true
				},
				listeners:{
					itemap: function(nestedList,list, index,element,post) {
						this.getDetailCard().setHtml(post.get('content'));
				}
				}
			],
			item:[
				{
					xtype: 'fiedlset',
					title: 'Contact Fpoly',
					instructions: '(email address is optional)',
					item:[
						{
							xtype: 'textfield',
							label: 'Name'
						},
						{
							xtype: 'emailfield',
							label: 'Email'
						},
						{
							xtype: 'textareafield',
							label: 'Message'
						},
					]
				},
				{
					xtype: 'button',
					text: 'Send',
					ui: 'confirm',
					hadler: function(){
						this.up('formpanel').submit();
					}
				}
			],
			item[
				{
					title: 'Home',
			iconCls: 'home',
			cls: 'home',
			html:[
			
			]
				},
			]
			
		});
	}
});