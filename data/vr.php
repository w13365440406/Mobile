<?php
	$type = $_REQUEST['type'];
	$str = '';
	if ($type == 'list') {
		$str = '{
    "records": [
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/b35d9e7407a011e7886200163e0018da",
            "area": 2,
            "style": 6,
            "Name": "恒基凯旋门-三期6栋1404全景图",
            "Img": "../images/b35d9e7407a011e7886200163e0018da.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/501909de086311e7b1ce00163e01117a",
            "area": 1,
            "style": 7,
            "Name": "未来康桥长郡-13栋2403",
            "Img": "../images/501909de086311e7b1ce00163e01117a.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/242ac998086311e7873000163e01117a",
            "area": 2,
            "style": 2,
            "Name": "远洋城户型图D地块3、4、5、10号楼标准层D1户型",
            "Img": "../images/242ac998086311e7873000163e01117a.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/c46e0c58086311e7aa7000163e0018da",
            "area": 2,
            "style": 8,
            "Name": "珠峰国际花园-29-3-1704",
            "Img": "../images/c46e0c58086311e7aa7000163e0018da.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/29ead75e086511e7b44700163e0018da",
            "area": 3,
            "style": 3,
            "Name": "融侨观邸122.00㎡三室户型3室2厅2卫",
            "Img": "../images/29ead75e086511e7b44700163e0018da.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/232ef0ba094d11e79ac800163e01117a",
            "area": 1,
            "style": 2,
            "Name": "海河大关-4—1403",
            "Img": "../images/232ef0ba094d11e79ac800163e01117a.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/412722f0094711e7bbe300163e01117a",
            "area": 2,
            "style": 1,
            "Name": "金泰丽湾户型",
            "Img": "../images/412722f0094711e7bbe300163e01117a.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/f2be5c480a1111e7ad2600163e0018da",
            "area": 1,
            "style": 5,
            "Name": "碧桂园-1栋702-0317",
            "Img": "../images/f2be5c480a1111e7ad2600163e0018da.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/5a1ea4f00ac211e7965b00163e01117a",
            "area": 3,
            "style": 2,
            "Name": "上海春申景城5号楼户型图",
            "Img": "../images/5a1ea4f00ac211e7965b00163e01117a.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/a2a627fe086311e7b44700163e0018da",
            "area": 1,
            "style": 7,
            "Name": "绿城百合B11—3—303",
            "Img": "../images/a2a627fe086311e7b44700163e0018da.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/57e17a9e0d1711e7889d00163e0018da",
            "area": 2,
            "style": 3,
            "Name": "莲湖区梨园路26号附近5一705",
            "Img": "../images/57e17a9e0d1711e7889d00163e0018da.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/910d8cfe0dda11e789b000163e01117a",
            "area": 2,
            "style": 2,
            "Name": "南岸区南滨西路详龙江畔18—5—1",
            "Img": "../images/910d8cfe0dda11e789b000163e01117a.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/efc2756a0e9e11e7b97f00163e0018da",
            "area": 1,
            "style": 4,
            "Name": "中渝都会首站-111",
            "Img": "../images/efc2756a0e9e11e7b97f00163e0018da.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/338c20740e1411e7b28100163e0018da",
            "area": 1,
            "style": 5,
            "Name": "顺欣花园户型图11栋奇数层05单位",
            "Img": "../images/338c20740e1411e7b28100163e0018da.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/c6b2854a07c111e7912800163e0018da",
            "area": 1,
            "style": 5,
            "Name": "冠华苑小区22",
            "Img": "../images/c6b2854a07c111e7912800163e0018da.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/90a6ee22128f11e7bd5e00163e01117a",
            "area": 2,
            "style": 1,
            "Name": "融桥城-12-2-2702",
            "Img": "../images/90a6ee22128f11e7bd5e00163e01117a.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/8250d6440d4e11e788a400163e01117a",
            "area": 1,
            "style": 3,
            "Name": "集美",
            "Img": "../images/8250d6440d4e11e788a400163e01117a.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/cb06feca12a011e7b3dc00163e01117a",
            "area": 2,
            "style": 1,
            "Name": "龙郡家园",
            "Img": "../images/cb06feca12a011e7b3dc00163e01117a.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/005fc10a136011e7b3ec00163e0018da",
            "area": 2,
            "style": 4,
            "Name": "白桦林居(凤城九路)-2501",
            "Img": "../images/005fc10a136011e7b3ec00163e0018da.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/3a9e7bfc142011e78a9200163e0018da",
            "area": 1,
            "style": 3,
            "Name": "和平里东街9号院-503",
            "Img": "../images/3a9e7bfc142011e78a9200163e0018da.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/2a3873d0142011e7843b00163e0018da",
            "area": 1,
            "style": 3,
            "Name": "宝宇天邑阑山-10—1—3606",
            "Img": "../images/2a3873d0142011e7843b00163e0018da.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/23bd0840142011e7977000163e01117a",
            "area": 3,
            "style": 1,
            "Name": "华山珑城-A25-1501",
            "Img": "../images/23bd0840142011e7977000163e01117a.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/2ee3956a167b11e79e6d00163e0018da",
            "area": 1,
            "style": 2,
            "Name": "国宾中央区-13.1.1503",
            "Img": "../images/2ee3956a167b11e79e6d00163e0018da.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/32cdb6d6142011e788dd00163e01117a",
            "area": 2,
            "style": 2,
            "Name": "谦祥万和城3期-26-1-28东南",
            "Img": "../images/32cdb6d6142011e788dd00163e01117a.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/1a4f58da142011e7a7ae00163e0018da",
            "area": 2,
            "style": 3,
            "Name": "汉华成-421801",
            "Img": "../images/1a4f58da142011e7a7ae00163e0018da.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/26fd303e1d8f11e791d600163e01117a",
            "area": 2,
            "style": 1,
            "Name": "海亮新英里-3--2--3404",
            "Img": "../images/26fd303e1d8f11e791d600163e01117a.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/132b35a61e5c11e7ad6500163e01117a",
            "area": 3,
            "style": 1,
            "Name": "宫园中央-3号楼1单元1602室",
            "Img": "../images/132b35a61e5c11e7ad6500163e01117a.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/ddc53f401e9411e7a71600163e0018da",
            "area": 1,
            "style": 2,
            "Name": "东王庄11号楼606",
            "Img": "../images/ddc53f401e9411e7a71600163e0018da.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/95754046b51211e6a33400163e0018da",
            "area": 2,
            "style": 2,
            "Name": "惠济区开元路10号12—2—604all",
            "Img": "../images/95754046b51211e6a33400163e0018da.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/2630b8a2cc04c8c09478d5b38f6ce863",
            "area": 2,
            "style": 2,
            "Name": "苏宁悦城12-2001",
            "Img": "../images/2630b8a2cc04c8c09478d5b38f6ce863.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/db61023c0d2a11e7b37600163e0018da",
            "area": 2,
            "style": 2,
            "Name": "北郡新城12-2501",
            "Img": "../images/db61023c0d2a11e7b37600163e0018da.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/13613600102f11e7816a00163e01117a",
            "area": 1,
            "style": 1,
            "Name": "观山名筑12-1401",
            "Img": "../images/13613600102f11e7816a00163e01117a.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/56d4e138128d11e78c8a00163e0018da",
            "area": 1,
            "style": 2,
            "Name": "水木清城20-1302",
            "Img": "../images/56d4e138128d11e78c8a00163e0018da.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/4da2042c141f11e788dd00163e01117a",
            "area": 1,
            "style": 2,
            "Name": "绿城玉兰花园",
            "Img": "../images/4da2042c141f11e788dd00163e01117a.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/fe66f9dc167911e786a000163e0018da",
            "area": 1,
            "style": 3,
            "Name": "尚锦城79-2004",
            "Img": "../images/fe66f9dc167911e786a000163e0018da.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/285c5bf0ba8c11e6b9da00163e01117a",
            "area": 2,
            "style": 7,
            "Name": "南湖家园11-1204",
            "Img": "../images/285c5bf0ba8c11e6b9da00163e01117a.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/47cbfe15e9828810c42514e18117702c",
            "area": 3,
            "style": 2,
            "Name": "朗诗新郡03-2201",
            "Img": "../images/47cbfe15e9828810c42514e18117702c.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/0b103e38ae4804e5772bc4fdbdab476c",
            "area": 2,
            "style": 1,
            "Name": "毫州万科户型",
            "Img": "../images/0b103e38ae4804e5772bc4fdbdab476c.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/a8a26ebda6c5f96144d2c543cb06d476",
            "area": 3,
            "style": 2,
            "Name": "毫州万科C2栋136户型",
            "Img": "../images/a8a26ebda6c5f96144d2c543cb06d476.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/fab2d2b9018576e8466ec57739e221f7",
            "area": 1,
            "style": 2,
            "Name": "87翡翠公园",
            "Img": "../images/fab2d2b9018576e8466ec57739e221f7.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/8928055f0681a5507bb4c580d7edf5fd",
            "area": 3,
            "style": 2,
            "Name": "毫州万达C2#西100-0203户-01",
            "Img": "../images/8928055f0681a5507bb4c580d7edf5fd.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/9a0501bc8e182c5ca83bc54f6ea91e90",
            "area": 1,
            "style": 2,
            "Name": "保利金爵公寓新中式",
            "Img": "../images/9a0501bc8e182c5ca83bc54f6ea91e90.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/e214b3be82569cd52e6bc5625e3fe351",
            "area": 3,
            "style": 3,
            "Name": "英豪永和春天C4-1",
            "Img": "../images/e214b3be82569cd52e6bc5625e3fe351.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/4907767c5b6bd3c1326dc5d53949259b",
            "area": 3,
            "style": 2,
            "Name": "英豪永和春天E户型",
            "Img": "../images/4907767c5b6bd3c1326dc5d53949259b.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/3f753d339ebf03843d3ac5fc416bd9cf",
            "area": 3,
            "style": 3,
            "Name": "芝雅汇苑",
            "Img": "../images/3f753d339ebf03843d3ac5fc416bd9cf.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/79152d29642257282963c5bcffe7c98c",
            "area": 2,
            "style": 3,
            "Name": "万科样板房4",
            "Img": "../images/79152d29642257282963c5bcffe7c98c.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/3d9f998f0c85f0d91a24c61b0ebd7251",
            "area": 1,
            "style": 3,
            "Name": "宜华样板间",
            "Img": "../images/3d9f998f0c85f0d91a24c61b0ebd7251.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/3d51c78b4e84c1758e9fc65c4a2824c9",
            "area": 3,
            "style": 4,
            "Name": "宜华样板间",
            "Img": "../images/3d51c78b4e84c1758e9fc65c4a2824c9.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/5b1163b35936462eba05c63d64a68f9d",
            "area": 1,
            "style": 2,
            "Name": "绿地A-2（Party）",
            "Img": "../images/5b1163b35936462eba05c63d64a68f9d.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/865396ea155dcd1d19fbc5de52595f5b",
            "area": 2,
            "style": 1,
            "Name": "东莞名家居_美式乡村",
            "Img": "../images/865396ea155dcd1d19fbc5de52595f5b.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/dccd6097b10c208c4c97c5e079d653bf",
            "area": 2,
            "style": 5,
            "Name": "东莞名家居_新中式风格",
            "Img": "../images/dccd6097b10c208c4c97c5e079d653bf.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/8f73c53e9f0be7c46b7ec5ec33eb475c",
            "area": 3,
            "style": 3,
            "Name": "宜华华洛斯系列",
            "Img": "../images/8f73c53e9f0be7c46b7ec5ec33eb475c.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/e665f10187e9b2284f5bc5f94952b2b2",
            "area": 2,
            "style": 5,
            "Name": "绿地21新城",
            "Img": "../images/e665f10187e9b2284f5bc5f94952b2b2.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/61bf53f5a7a88c71ed2cc5fc7d58e7c9",
            "area": 2,
            "style": 5,
            "Name": "昌吉欧亚国际146*720度全景样板间",
            "Img": "../images/61bf53f5a7a88c71ed2cc5fc7d58e7c9.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/697b7098b697b2a327e4c626bfacfa66",
            "area": 3,
            "style": 2,
            "Name": "万科翡翠公园",
            "Img": "../images/697b7098b697b2a327e4c626bfacfa66.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/619dfbce369a1833d2dec4d1dc1d2414",
            "area": 3,
            "style": 3,
            "Name": "英豪永和春天",
            "Img": "../images/619dfbce369a1833d2dec4d1dc1d2414.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/b6dff73729a589b5d6a1c4a23c2085b1",
            "area": 2,
            "style": 1,
            "Name": "宜华家居",
            "Img": "../images/b6dff73729a589b5d6a1c4a23c2085b1.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/acec966899f4f1b8fc4bc58f9a6d7b61",
            "area": 3,
            "style": 3,
            "Name": "宜华城VR二期1栋167.19平-用宜华家居01",
            "Img": "../images/acec966899f4f1b8fc4bc58f9a6d7b61.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/0b87629750ea56f79b4ec5a1b1dec8d4",
            "area": 3,
            "style": 2,
            "Name": "宜华联合系列-儿童房2",
            "Img": "../images/0b87629750ea56f79b4ec5a1b1dec8d4.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/f07c4b4519e9bebd970ec5c3309ac496",
            "area": 3,
            "style": 2,
            "Name": "宜华家居",
            "Img": "../images/f07c4b4519e9bebd970ec5c3309ac496.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/6fb7b310837e5039fef3c5cc8525fca2",
            "area": 3,
            "style": 2,
            "Name": "乐园居室",
            "Img": "../images/6fb7b310837e5039fef3c5cc8525fca2.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/06f6bc4531e937598406c5d504ed3918",
            "area": 2,
            "style": 1,
            "Name": "美式-样板房1",
            "Img": "../images/06f6bc4531e937598406c5d504ed3918.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/b6881dcb80949e2327c3c5dffcf6e348",
            "area": 2,
            "style": 2,
            "Name": "古庄新城---厦门--现代简约风格",
            "Img": "../images/b6881dcb80949e2327c3c5dffcf6e348.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/917fa5a9e6eeda45f8cbc5f92b67fa05",
            "area": 2,
            "style": 2,
            "Name": "宜华新品发布会系列",
            "Img": "../images/917fa5a9e6eeda45f8cbc5f92b67fa05.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/61e2050b8e180ce8b0e3c61a2872c56e",
            "area": 3,
            "style": 2,
            "Name": "宜华VR二期1栋167.19平",
            "Img": "../images/61e2050b8e180ce8b0e3c61a2872c56e.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/9fcaccec7c1769511a16c61dca80cad7",
            "area": 1,
            "style": 2,
            "Name": "宜华城VR71.78平-用宜华家居",
            "Img": "../images/9fcaccec7c1769511a16c61dca80cad7.jpg@!640x426.jpg"
        },
        {
            "Hyperlink": "http://3d.fuwo.com/ifuwo/pano/design/644c0b42df6e19ba8469c629e721e7d9",
            "area": 3,
            "style": 2,
            "Name": "万达国际公馆-C2栋115户型",
            "Img": "../images/644c0b42df6e19ba8469c629e721e7d9.jpg@!640x426.jpg"
        }
    ]
}';
	}else if ($type == "Hot") {
        $str = '{
        "records":[
            {
                "Content":"求指点，我该怎么装修好看？",
                "User_name":"187****9119",
                "User_head":"http://img.fuwo.com/account/avatar.jpg@!60x60.jpg",
                "Reply":"3"
            },
            {
                "Content":"那些买一赠一的户型怎么住才爽？",
                "User_name":"凯撒",
                "User_head":"http://img.fuwo.com/account/1610/13/aa51faba90e911e6b19500163e000ee8.jpg@!60x60.jpg",
                "Reply":"6"
            },
            {
                "Content":"求大神，复式客厅设计，简约实用，层高2米五",
                "User_name":"134****3594",
                "User_head":"http://img.fuwo.com/account/avatar.jpg@!60x60.jpg",
                "Reply":"4"
            },
            {
                "Content":"求解救",
                "User_name":"130****7818",
                "User_head":"http://img.fuwo.com/account/avatar.jpg@!60x60.jpg",
                "Reply":"2"
            },
            {
                "Content":"老房改造",
                "User_name":"156****4773",
                "User_head":"http://img.fuwo.com/account/avatar.jpg@!60x60.jpg",
                "Reply":"2"
            },
            {
                "Content":"爱福窝云设计进阶教程——别出心裁的复式楼设计",
                "User_name":"爱福窝小管家",
                "User_head":"http://img.fuwo.com/account/1612/01/a816425ab79b11e6963400163e000ee8.jpg@!60x60.jpg",
                "Reply":"25"
            },
            {
                "Content":"谁说只有大户型才能放肆，小户型就只有克制",
                "User_name":"爱福窝小管家",
                "User_head":"http://img.fuwo.com/account/1612/01/a816425ab79b11e6963400163e000ee8.jpg@!60x60.jpg",
                "Reply":"2"
            },
            {
                "Content":"大家看看，这种户型怎么装修好点",
                "User_name":"nidalma01",
                "User_head":"http://img.fuwo.com/account/avatar.jpg@!60x60.jpg",
                "Reply":"2"
            },
            {
                "Content":"中间这个过道，有没有办法改改！",
                "User_name":"无所谓",
                "User_head":"http://img.fuwo.com/account/1702/06/797171e0ec4d11e6980300163e0c3546.jpg@!60x60.jpg",
                "Reply":"3"
            },
            {

                "Content":"这个户型怎么改二个厕所，主卧室能不能换位置，各位大师帮我看看",
                "User_name":"187****5162",
                "User_head":"http://img.fuwo.com/account/avatar.jpg@!60x60.jpg",
                "Reply":"6"
            }
        ]
    }';

}
	echo $str;
 ?>