<html>

<head>
	<title>贵烟跨越</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=750, user-scalable=no">
	<link rel="stylesheet" href="/css/animate.min.css">
	<script type="text/javascript" src="https://res.wx.qq.com/open/js/jweixin-1.4.0.js"></script>
	<script type="text/javascript" src="/js/common/jquery-3.2.1.min.js"></script>
	<style>
		body>img {
			width: 0;
			
		}

		html,
		body {
			margin: 0;
			background:black;
		}

		.container {
			width:100%;
			position: absolute;
			max-height: 100vh;
			overflow: hidden;
			z-index: 5;
			top: 0;
			left: 0;
		}
	</style>
</head>

<body>

	<div class="container"></div>

	<!-- <audio src="http://cdn.yskj.howlab.cn/images/rc/music.mp3?6" loop id="bgm"></audio>
	<audio src="http://cdn.yskj.howlab.cn/images/rc/mp3/1.mp3?6" id="m1"></audio> -->


</body>
<script type="text/javascript" src="/js/Alloytouch.js"></script>
<script type="text/javascript" src="/js/common/Pixi.min.js"></script>
<script type="text/javascript" src="/js/common/TimelineMax.min.js"></script>
<script type="text/javascript" src="/js/common/TweenMax.min.js"></script>
<script type='text/javascript'>
	//初始化应用，加载资源
	//创建PIXI应用
	const w = document.body.clientWidth,
	h =  1448
	let app = new PIXI.Application({
		width: w,
		height: h,
		backgroundColor: 0x000000,
		forceCanvas: true
	});

	//获取屏幕宽高，判断横屏还是竖屏
	let min = w;
	let scale = min / 750;  // 根据设计稿尺寸进行缩放比例调整


	//创建资源加载器，进行资源预加载
	const loader = new PIXI.loaders.Loader();

	loader.add([
		{ name: 'page1', url: '/images/gy/bg1.png' },
		{ name: 'line1', url: '/images/gy/p1/line1.png' },

		{ name: 'line2', url: '/images/gy/p1/line2.png' },
		{ name: 'p1_bright', url: '/images/gy/p1/bright.png' },
		{ name: 'p1_title', url: '/images/gy/p1/title.png' },
		{ name: 'p1_lxy', url: '/images/gy/p1/lxy1.png' },
		{ name: 'p1_qhy', url: '/images/gy/p1/qhy.png' },
		{ name: 'p1_xf1', url: '/images/gy/p1/1.png' },
		{ name: 'p1_xf2', url: '/images/gy/p1/2.png' },
		{ name: 'p1_xf3', url: '/images/gy/p1/3.png' },
		{ name: 'p1_xf4', url: '/images/gy/p1/4.png' },
		{ name: 'p1_xf5', url: '/images/gy/p1/5.png' },
		{ name: 'p1_xf1_yy', url: '/images/gy/p1/y1.png' },
		{ name: 'p1_xf2_yy', url: '/images/gy/p1/y2.png' },
		{ name: 'p1_xf3_yy', url: '/images/gy/p1/y3.png' },
		{ name: 'p1_xf4_yy', url: '/images/gy/p1/y4.png' },
		{ name: 'p1_zp', url: '/images/gy/p1/zp.png' },
		{ name: 'p1_zkz', url: '/images/gy/p1/tzs.png' },
		{ name: 'p1_tzs', url: '/images/gy/p1/zkz.png' },
		{ name: 'p1_zc1', url: '/images/gy/p1/zc1.png' },
		{ name: 'p1_zc2', url: '/images/gy/p1/zc2.png' },
		{ name: 'p1_gz', url: '/images/gy/p1/gz.png' },

		{ name: 'p2_ball', url: '/images/gy/p2/ball.png' },
		{ name: 'p2_ball2', url: '/images/gy/p2/ball.png' },
		{ name: 'p2_wz', url: '/images/gy/p2/wz.png' },
		{ name: 'p2_1981', url: '/images/gy/p2/1981.png' },
		{ name: 'p2_lwr', url: '/images/gy/p2/lwr.png' },
		{ name: 'p2_ljt', url: '/images/gy/p2/ljt.png' },
		{ name: 'p2_jb', url: '/images/gy/p2/jb.png' },
		{ name: 'p2_lh', url: '/images/gy/p2/lh.png' },

		{ name: 'p2_man', url: '/images/gy/p2/man1.png' },



		{ name: 'p3_c1', url: '/images/gy/p3/c1.png' },
		{ name: 'p3_c2', url: '/images/gy/p3/c2.png' },
		{ name: 'p3_c3', url: '/images/gy/p3/c3.png' },


		{ name: 'p5_eather', url: '/images/gy/p4/eather.png' },
		{ name: 'p5_weixing', url: '/images/gy/p4/weixing.png' },
		{ name: 'p5_xq1', url: '/images/gy/p4/xq1.png' },
		{ name: 'p5_xq2', url: '/images/gy/p4/xq2.png' },
		{ name: 'p5_montain', url: '/images/gy/p4/montain.png' },
		{ name: 'p5_montain_front', url: '/images/gy/p4/front_montain.png' },
		{ name: 'p5_tree', url: '/images/gy/p4/tree.png' },
		{ name: 'p5_front_bg', url: '/images/gy/p4/front.png' },
		{ name: 'p5_gl', url: '/images/gy/p4/gl.png' },
		{ name: 'p5_xh1', url: '/images/gy/p4/xh1.png' },
		{ name: 'p5_xh2', url: '/images/gy/p4/xh2.png' },
		{ name: 'p5_xh3', url: '/images/gy/p4/xh3.png' },
		{ name: 'p5_xh4', url: '/images/gy/p4/xh4.png' },
		{ name: 'p5_xh5', url: '/images/gy/p4/xh5.png' },
		{ name: 'p5_xh6', url: '/images/gy/p4/xh6.png' },
		{ name: 'p5_xh7', url: '/images/gy/p4/xh7.png' },
		{ name: 'p5_xh8', url: '/images/gy/p4/xh8.png' },
		{ name: 'p5_xh9', url: '/images/gy/p4/xh9.png' },
		{ name: 'p5_xh10', url: '/images/gy/p4/xh10.png' },
		{ name: 'p5_xh11', url: '/images/gy/p4/xh11.png' },
		{ name: 'p5_xh12', url: '/images/gy/p4/xh12.png' },
		{ name: 'p5_xh13', url: '/images/gy/p4/xh13.png' },
		{ name: 'p5_hc_in', url: '/images/gy/p4/hc_in.png' },
		{ name: 'p5_hc_out', url: '/images/gy/p4/hc_out.png' },
		{ name: 'p5_hc_out2', url: '/images/gy/p4/hc_out.png' },


		{ name: 'page2', url: '/images/gy/bg2.png' },
		{ name: 'page3', url: '/images/gy/bg3.png' },
		{ name: 'page4', url: '/images/gy/bg4.png' },
		{ name: 'page5', url: '/images/gy/bg5.png' },
		{ name: 'p5_front', url: '/images/gy/p4/p5_front.png?2' },

		{ name: 'page6', url: '/images/gy/bg6.png' },

		{ name: 'page7', url: '/images/gy/bg7.png' },

		{ name: 'page8', url: '/images/gy/bg8.png' },

	], { crossOrigin: true })

	loader.load(); 

	loader.on("progress", function (target, resource) {  // 加载进度

	});



	loader.once('complete', function (target, resource) {  // 加载完成
		$('.container').css('display', 'block');

		$('.container').append(app.view);
		initScenes(); // 初始化场景
		initSprites();  // 初始化精灵
		// initGif()
		initAnimation(); // 初始化动画
		lineAnimate()

		// app.stage.scale.set(scale, scale);  // 根据屏幕实际宽高放大舞台
		initTouch(true, 'y');
	});


	const scenesOptions = [ // 场景数据：定义每个场景的宽高,x/y距离
		{
			name: "scene6",
			x: -(5636-w), y: -1448-h,height:1448,width:5636
		},
		{
			name: "scene5",
			x: 0, y: -1697-h,height:1697
		},
		
		{
			name: "scene4",
			x: -4634+w, y: 10000,height:1448,width:4634
		},
		
		{
			name: "scene3",
			x: 0, y: 12924,height:7569
		},
	
		{
			name: "scene1",
			x: 0, y: 0,height:6681
		},
		
		{
			name: "scene2",
			x: 0, y: 6681,height:1448,width:4186
		},
		
		
	

	]
	const scenes = {};  // 场景集合 - pixi对象
	// function initGif(){
	//     act_1_animate_bg_img_arr = [];
	//     for (let $e = 1; $e <= 2; $e++) {
	//         act_1_animate_bg_img_arr.push(`http://cdn.yskj.howlab.cn/images/rc/1/dog${$e}.png?2`);
	//     }

	//     //精灵
	//     var sprite4 = new PIXI.extras.AnimatedSprite.fromImages(act_1_animate_bg_img_arr)
	//     //精灵添加到舞台
	//     scenes['scene1'].addChild(sprite4)
	//     sprite4.position.y = 500
	//     //找到序列帧所在的图层，放到对应位置，并设置移动速度
	//     sprite4.animationSpeed = 0.05; //控制速度
	//     sprite4.play();//自动播放序列帧

	// }
	function initScenes() { // 初始化场景
		for (let i = scenesOptions.length - 1; i >= 0; i--) {
			scenes[scenesOptions[i].name] = new PIXI.Container({
				width: scenesOptions[i].width,
				height: scenesOptions[i].height
			});
			

			scenes[scenesOptions[i].name].y = scenesOptions[i].y;
			scenes[scenesOptions[i].name].x = scenesOptions[i].x;
			app.stage.addChild(scenes[scenesOptions[i].name]);
		}
	}
</script>



<script type="text/javascript">
	const spritesOptions = [ // 精灵数据：定义每个精灵的坐标
		//scene1
		{
			page1: {
				position: { x: 0, y: 0 }
			},
			line1: {
				position: { x: 83, y: 309 }
			},
			line2: {
				position: { x: 86, y: 1384 }
			},
		
			p1_bright:{
				position: { x: 0, y: 120 },
				alpha:0.3
			},
			p1_title:{
				position: { x: 130, y: 2309 },
			},
		
			p1_lxy:{
				url:['/images/gy/p1/lxy1.png?2','/images/gy/p1/lxy2.png?2','/images/gy/p1/lxy3.png?2','/images/gy/p1/lxy4.png?2'],
                gif:true,
                animationSpeed:0.02, 
				position:{
					x:53,y:2607
				},
            },
			p1_qhy:{
				position: {x:0,y:3820}
			},
			p1_xf1_yy:{
				position: {x:382,y:4203}
			},
			p1_xf1:{
				position: {x:375,y:4191}
			},
		
			p1_xf2_yy:{
				position: {x:316,y:4300}
			},
			p1_xf2:{
				position: {x:307,y:4289}
			},
		
			p1_xf3_yy:{
				position: {x:142,y:4329}
			},
			p1_xf3:{
				position: {x:140,y:4313	}
			},
		
			p1_xf4_yy:{
				position: {x:56,y:4559}
			},
			p1_xf4:{
				position: {x:48,y:4517	}
			},
		
			p1_xf5:{
				position: {x:19,y:4663	}
			},
			p1_zp:{
				position: {x:332,y:4385	}
			},
			p1_zkz:{
				position: {x:-270,y:4770	}
			},
			p1_tzs:{
				position: {x:72,y:4541	}
			},
			p1_gz:{
				position: {x:0,y:4804	},
				rotation:-0.5
				
			},
			p1_zc2:{
				width:3000,
				height:2949,
				position: {x:0,y:5037	},
				
			},
			p1_zc1:{
				width:3000,
				height:2956,
				position: {x:-2856,y:5037	},
				
			},

			},
			//scene2
			{
		
			page2: {
				position: { x: 0, y: 0 }
			},

			p2_ball:{
				position:{x:1588,y:600},
				width:1209,
				height:335
			},
			p2_1981:{
				position:{x:131,y:187},
		
			},
			p2_man:{
				position:{
					x:67,
					y:347
				}
			},
			p2_lwr:{
				position:{
					x:1091,
					y:513
				}
			},
			p2_wz:{
				position:{
					x:839,
					y:440
				}
			},
			p2_ljt:{
				position:{
					x:1885,
					y:1117
				}
			},
			p2_jb:{
				position:{
					x:2125,
					y:585
				}
			},
			p2_lh:{
				position:{
					x:1362,
					y:0
				}
			}
		},	
		
		{
			
			page3: {
				position: { x: 0, y: 0 }
			},
			//云层
			page4: {
				position: { x: 0, y: -4795 }
			},
			p5_eather: {
				position: { x: 0, y: -4795}
			},
			p5_weixing: {
				position: { x: 356, y: -4795}
			},
			p5_xq2: {
				position: { x: 93, y: -3400}
			},
			p5_xq1: {
				position: { x: 0, y: -4253}
			},
			p5_front_bg:{
				position:{	x:0,  y:-2292  }
			},
			p5_gl:{
				position:{	x:0,  y:-1057  }
			},
		
			p5_montain:{
				position:{	x:154,  y:-2227}
			},
			p5_hc_in:{
				position:{
					y:-1806,
					x:-1172
				}
			},
		
			p5_montain_front:{
				position:{	x:-61,  y:-2311}
			},
		
			p5_xh1:{
				position:{	x:318,  y:-4055},
				alpha:0
			},
			p5_xh2:{
				position:{	x:318,  y:-3972},
				alpha:0
			},
			p5_xh3:{
				position:{	x:223,  y:-3837},
				alpha:0
			},
			p5_xh4:{
				position:{	x:156,  y:-3744},
				alpha:0
			},
			p5_xh5:{
				position:{	x:94,  y:-3588},
				alpha:0
			},
			p5_xh6:{
				position:{	x:144,  y:-3407},
				alpha:0
			},
			p5_xh7:{
				position:{	x:204,  y:-3287},
				alpha:0
			},
			p5_xh8:{
				position:{	x:284,  y:-3166},
				alpha:0
			},
			p5_xh9:{
				position:{	x:305,  y:-3065},
				alpha:0
			},
			p5_xh10:{
				position:{	x:331,  y:-2927},
				alpha:0
			},
			p5_xh11:{
				position:{	x:286,  y:-2767},
				alpha:0
			},
			p5_xh12:{
				position:{	x:263,  y:-2641},
				alpha:0
			},
			p5_xh13:{
				position:{	x:254,  y:-2523},
				alpha:0

			},
			p5_hc_out:{
				position:{
					y:-2290,
					x:1546
				}
			},
			p5_tree:{
				position: { x: 0, y: -1376 }
			},
			//上个转场的篮球
		
			p3_c1:{
				position:{
					y:555,
					x:-1618
				}
			},
			p3_c2:{
				position:{
					y:553,
					x:238
				}
			},
			p3_c3:{
				position:{
					y:-500,
					x:-1618
				}
			},
			p2_ball2:{
				width:5945,
				height:1645,
				position:{
					x:-(5945 - w - 200 ),
					y:2785-h
					
				}
			},	
		},
		{
			page5: {
				position: { x: 0, y: 0 }
			},
		
			p5_hc_out2:{
				position: { x: 4084, y: -101 }
			},
			p5_tree:{
				position: { x: 4633, y: 72 }
			},
			p5_front:{
				position:{
					x:1,
					y:0
				}
			}
		},{
				
			page6: {
				position: { x: 0, y: 0 }
			},
		},
		{		
			page7: {
				position: { x:2785, y:0 }
			},
			page8: {
				position: { x:0, y: 0 }
			},
		}
		
	

	];
	const animationsOptions = {  // 精灵动画集合
		/**第一场景走路*/
		/**第一场景走路*/
		
		scene1:[{
			scene:true,
			delay: 0.000,
			duration:0.1,
			to: {y:-(8129- h),ease: Power0.easeNone }
		},
		
		],
		p1_gz:[{
				delay: 0.062,
				duration:0.001,
				
				to: {rotation:0.2 }
				
		}],
		//p1转场
		p1_zc1:[{
			
			delay: 0.08,
			duration:0.01,
			to: {width:3000,height:2956,x:-2106,y:5437,ease: Power0.easeNone  }
		
		},
		{
			
			delay: 0.1,
			duration:0.01,
			to: {width:3000,height:2956,x:-5500,y:5437,ease: Power0.easeNone,alpha:0  }
		
		}],
		p1_zc2:[{
			delay: 0.08,
			duration:0.01,
			to: {width:3000,height:2949,x:-750,y:5737,ease: Power0.easeNone  }
		
		},
		{
			delay: 0.1,
			duration:0.01,
			to: {width:3000,height:2949,x:3000,ease: Power0.easeNone,alpha:0  }
		
		}],
		//第二屏竖滑动联动第一屏
		scene2:[
			{
			scene:true,
			delay: 0.000,
			duration:0.1,
			to: {y:0,ease: Power0.easeNone }
		},
		//第二屏横滑
		{
			scene:true,
			delay: 0.11,
			duration:0.04,
			to: {x:-4186+w,ease: Power0.easeNone }
		},
		{
			scene:true,
			delay: .15,
			duration:0.000000001,
			to: {alpha:0,visible:false,ease: Power0.easeNone }
		}
		],
		//第三屏滑动
		scene3:[{
			scene:true,
			delay: .15,
			duration:0.000000001,
			to: {y:-(2774- h),ease: Power0.easeNone }
		},	{
			scene:true,
			delay: .16,
			duration:0.04,
			to: {y:0,ease: Power0.easeNone }
		},
		{
			scene:true,
			delay: .20,
			duration:0.0000000001,
			to: {y:(4795),ease: Power0.easeNone }
		},
		{
			scene:true,
			delay: .21,
			duration:0.08,
			to: {y:h,ease: Power0.easeNone }
		},
		{
			scene:true,
			delay: .30,
			duration:0.01294,
			to: {x:w,ease: Power0.easeNone }
		},
		],
		p5_xh1:[{
			delay: .209,
			duration:0.000000001,
			to: {alpha:1,ease: Power0.easeNone }
		}],
		p5_xh2:[{
			delay: .21,
			duration:0.000000001,
			to: {alpha:1,ease: Power0.easeNone }
		}],
		p5_xh3:[{
			delay: .212,
			duration:0.000000001,
			to: {alpha:1,ease: Power0.easeNone }
		}],
		p5_xh4:[{
			delay: .214,
			duration:0.000000001,
			to: {alpha:1,ease: Power0.easeNone }
		}],
		p5_xh5:[{
			delay: .216,
			duration:0.000000001,
			to: {alpha:1,ease: Power0.easeNone }
		}],
		p5_xh6:[{
			delay: .218,
			duration:0.000000001,
			to: {alpha:1,ease: Power0.easeNone }
		}],
		p5_xh7:[{
			delay: .22,
			duration:0.000000001,
			to: {alpha:1,ease: Power0.easeNone }
		}],
		p5_xh8:[{
			delay: .222,
			duration:0.000000001,
			to: {alpha:1,ease: Power0.easeNone }
		}],
		p5_xh9:[{
			delay: .224,
			duration:0.000000001,
			to: {alpha:1,ease: Power0.easeNone }
		}],
		p5_xh10:[{
			delay: .226,
			duration:0.000000001,
			to: {alpha:1,ease: Power0.easeNone }
		}],
		p5_xh11:[{
			delay: .228,
			duration:0.000000001,
			to: {alpha:1,ease: Power0.easeNone }
		}],
		p5_xh12:[{
			delay: .230,
			duration:0.000000001,
			to: {alpha:1,ease: Power0.easeNone }
		}],
		p5_xh13:[{
			delay: .232,
			duration:0.000000001,
			to: {alpha:1,ease: Power0.easeNone }
		}],
		p5_hc_in:[{
			delay:0.263,
			duration:0.016,
			to:{
				x:425,y:-1770,ease: Power0.easeNone
			}
		}],
		p5_hc_out:[{
			delay:0.274,
			duration:0.016,
			to:{
				x:-550,y:-1550,ease: Power0.easeNone
			}
		}],
		//第四屏page5
		scene4:[{
			scene:true,
			delay: .30,
			duration:0.000000001,
			to: {y:0,x:-(4633),ease: Power0.easeNone }
		},
		{	scene:true,

			delay: 0.30,
			duration:0.08,
			to: {x:0,ease: Power0.easeNone }
		},
		{
			scene:true,
			delay: .39,
			duration:0.000000001,
			to: {alpha:0,visible:false,ease: Power0.easeNone }
		}
		],
	


		//第五屏 page6
		scene5:[{
			scene:true,
			delay: .39,
			duration:0.000000001,
			to: {y: 0,ease: Power0.easeNone }
		},
		{	scene:true,

			delay: 0.39,
			duration:0.01,
			to: {y:-(1697-h),ease: Power0.easeNone }
		},
		],
		//第六个场景
		scene6:[{
			scene:true,
			delay: .40,
			duration:0.000000001,
			to: {y:-(1448-h),ease: Power0.easeNone }
		},
		{
			scene:true,
			delay: .40,
			duration:0.08,
			to: {x:0,ease: Power0.easeNone }
		},
		],

		p3_c1:[{
			delay:0.18,
			duration:0.02,
			to: {x:-1082,width:4000,height:1645,ease: Power0.easeNone }
		},
		{
			delay:0.20,
			duration:0.000000001,
			to: {x:-1082,y:-4795+555,width:4000,height:1645,ease: Power0.easeNone }
		},
		{
			delay:0.20,
			duration:0.01,
			to: {x:-2413,width:2413,alpha:0,height:475,ease: Power0.easeNone }
		}],
		p3_c2:[{
			delay:0.18,
			duration:0.02,
			to: {x:-1082,width:4000,height:1238,ease: Power0.easeNone }
		},
		{
			delay:0.20,
			duration:0.000000001,
			to: {x:-1082,width:4000,height:1238,y:-4795+553,ease: Power0.easeNone }
		},
		{
			delay:0.20,
			duration:0.01,
			to: {x:1228,width:1228,alpha:0,height:380,ease: Power0.easeNone }
		}
		],
		p3_c3:[{
			delay:0.18,
			duration:0.02,
			to: {x:-1082,width:4000,height:1235,ease: Power0.easeNone }
		},{
			delay:0.20,
			duration:0.000000001,
			to: {x:-1082,width:4000,height:1235,y:-4795-500,ease: Power0.easeNone }
		},
		{
			delay:0.20,
			duration:0.01,
			to: {x:-2108,width:2108,alpha:0,height:867,ease: Power0.easeNone }
		}],
		//转场
		p2_ball2:[{
			delay: 0.15,
			duration:0.02,
			to: {width:0,x:5000,height:0,scale:0,alpha:0,ease: Power0.easeNone }
		}],
	
		
		

		//第二屏转场球
		p2_ball:[{
			delay: 0.13,
			duration:0.01,
			to: {x:1890,y:295,ease: Power0.easeNone }
		},
		{
			delay: 0.14,
			duration:0.01,
			to: {width:5945,x:-1559,y:-0,height:1645,ease: Power0.easeNone }
		}],
	
		
	

	}
	const sprites = {}; // 精灵集合 - pixi对象
	function animateInit() {

		// TweenMax.to(sprites['p5_xq1'],.7,{rotationZ:0.5,ease: Linear.easeInOut,delay:2.9});
		// TweenMax.to(sprites['p5_xq2'],.7,{rotation:1,ease: Linear.easeInOut, yoyo:true, repeat:-1,});

	}
	function initSprites() {  // new出所有精灵对象，并交给函数initSprite分别赋值

		for (let i = 0; i < spritesOptions.length; i++) {
			let obj = spritesOptions[i];
			for (let key in obj) {
				if (obj.hasOwnProperty(key)) {
					if (obj[key].gif) {
						//gif
						var act_1_animate_bg_img_arr = []
						for (let $e = 0; $e < obj[key].url.length; $e++) {
							act_1_animate_bg_img_arr.push(obj[key].url[$e]);
						}
						sprites[key] = new PIXI.extras.AnimatedSprite.fromImages(act_1_animate_bg_img_arr)
						sprites[key].play()
					} else {
						sprites[key] = PIXI.Sprite.fromImage(key);
					}
					initSprite(sprites[key], obj[key], i + 1);
				}
			}
		}
	}
	function lineAnimate(){
		let react = new PIXI.Graphics();
		react.beginFill(0xffffff);
		react.drawRect(0,-250,1000,600);
		react.endFill()
		react.x=0;
		react.y= 0;
		sprites['line1'].mask = react;

		let react1 = new PIXI.Graphics();
		react1.beginFill(0xffffff);
		react1.drawRect(0,-250,1000,600);
		react1.endFill()
		react1.x=0;
		react1.y= 0;
		sprites['line2'].mask = react1;
	}


	let hands

	function initSprite(sprite, prop, i) {  // 初始化单个精灵的属性并加入对应的场景中
		for (let key in prop) {
			if (prop.hasOwnProperty(key)) {
				sprite[key] = prop[key];
			}
		}
		scenes['scene' + i].addChild(sprite);
	}
</script>
<script type="text/javascript">
	var isshow = false
	//创建时间轴线
	let timeline = new TimelineMax({
		paused: true
	});
	var dis = 0

	let alloyTouch;
	let max = h;
	let alloyTouchX;

	
	function initTouch(vertical, val) {
		let scrollDis = app.stage.height - h
		
		alloyTouch = new AlloyTouch({
			touch: ".container", // 反馈触摸的dom
			vertical: true, // 不必需，默认是true代表监听竖直方向touch
			min: -scrollDis, // 不必需,运动属性的最小值
			maxSpeed: 1,
			max: 0, // 不必需,滚动属性的最大值
			bindSelf: false,
			initialValue: 0.01,
			sensitivity: 0.1,
			change: function (value) {
				let progress = -value / scrollDis;
				// app.stage.position.y = value;
			
				console.log(progress)
				
				if (progress > 0) {
					playAudio(progress);
				}

				progress = progress < 0 ? 0 : progress;
				progress = progress > 1 ? 1 : progress;
				// $('#showNum').html(progress); //测试位置函数
				timeline.seek(progress);

			},
			touchStart: function (value) {
				// sprites['dog1'].play()
			},
			touchEnd: function (value) {
				// sprites['dog1'].stop()
			}
		})
	}
	function playAudio(progress) {
		// if (progress >= 0.13279 && progress <=0.15676) {
		// 	playBgmAfterLoading('m1');
		// }

	}
	function show(imgobj, min, action, name) {
		//fadeInDown fadeInUp fadeIn fadeInLeft fadeInRight
		if (name) {
			imgobj.css({ 'visibility': 'visible', 'display': name, '-webkit-animation-duration': min + 's' }).addClass(action);
			return
		}
		imgobj.css({ 'visibility': 'visible', 'display': 'flex', '-webkit-animation-duration': min + 's' }).addClass(action);


	}
	function initAnimation() {
		for (let key in animationsOptions) {
			if (animationsOptions.hasOwnProperty(key)) {
				let obj = animationsOptions[key];
				for (let i = 0; i < obj.length; i++) {
					let act;
					let target;
					
					if (obj[i].prop && !obj[i].scene) {
						target = sprites[key][obj[i].prop];
					} else if( !obj[i].scene) {
						target = sprites[key];
					}
					if(obj[i].scene){
						target = scenes[key]
						console.log(target)
					}
					if (obj[i].from & obj[i].to) {
						act = TweenMax.fromTo(target, obj[i].duration, obj[i].from, obj[i].to);
					} else if (obj[i].from) {
						act = TweenMax.from(target, obj[i].duration, obj[i].from);
					} else if (obj[i].to) {
						act = TweenMax.to(target, obj[i].duration, obj[i].to);
					}
					let tm = new TimelineMax({ delay: obj[i].delay });
					tm.add(act, 0);
					tm.play();
					timeline.add(tm, 0);
				}
			}
		}
		animateInit()
	}

	function playBgmAfterLoading(e, next, wait) {
		playBgm(e);
		if (next) {
			setTimeout(function () {
				playBgm(next);
			}, wait);
		}
	}

	function playBgm(e) {

		let audio = document.getElementById(e);
		if (typeof WeixinJSBridge == "object" && typeof WeixinJSBridge.invoke == "function") {
			WeixinJSBridge.invoke('getNetworkType', {}, function (res) {
				audio.play();
			});
		} else {
			audio.play();
		}
	}

</script>

<script type="text/javascript">
	// 加载资源

	wx.config({
		debug: false,
		appId: '<?php echo isset($share['appid']) ? $share['appid'] : ''; ?>',
		timestamp: '<?php echo isset($share['js_time']) ? $share['js_time'] : ''; ?>',
		nonceStr: '<?php echo isset($share['nonceStr']) ? $share['nonceStr'] : ''; ?>',
		signature: '<?php echo isset($share['signature']) ? $share['signature'] : ''; ?>',
		jsApiList: ['onMenuShareTimeline', 'onMenuShareAppMessage', 'hideMenuItems']
	});
	var shareMessage = {
		title: '<?php echo isset($share['sharetitle']) ? $share['sharetitle'] : ''; ?>',
		desc: '<?php echo isset($share['sharedesc']) ? $share['sharedesc'] : ''; ?>',
		shareFriendsDesc: '<?php echo isset($share["shareFriendsDesc"]) ? $share["shareFriendsDesc"] : ""; ?>',
		link: '<?php echo isset($share['shareUrl']) ? $share['shareUrl'] : ''; ?>',
		imgUrl: '<?php echo isset($share['sharepic']) ? $share['sharepic'] : ''; ?>'
};

	wx.ready(function () {
		 // 加载资源
		//提交加载mp3 audio加了autoplay

		// document.getElementById('bgm').play();
		// document.getElementById('m1').play();



		wx.hideMenuItems({
			menuList: ['menuItem:copyUrl']
		});
		wx.onMenuShareTimeline({
			title: shareMessage.desc,
			link: shareMessage.link,
			imgUrl: shareMessage.imgUrl,
			success: function () {
				sharefriends();
			},
			cancel: function () { }
		});
		wx.onMenuShareAppMessage({
			title: shareMessage.title,
			desc: shareMessage.shareFriendsDesc,
			link: shareMessage.link,
			imgUrl: shareMessage.imgUrl,
			type: '',
			dataUrl: '',
			success: function () {
				sharefriend();
			},
			cancel: function () { }
		});
	});

</script>
<script>
	var _hmt = _hmt || [];
	(function () {
		var hm = document.createElement("script");
		hm.src = "https://hm.baidu.com/hm.js?ebb5002032d28e82fdfd648987b0dc42";
		var s = document.getElementsByTagName("script")[0];
		s.parentNode.insertBefore(hm, s);
	})();
</script>

</html>