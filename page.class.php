<?php

class MyPage{

	private $totalNum;			//总条数
	private $perpageNum;		//每页显示条数	
	private $pageNow;			//当前页页码
	private $method;			//"url"为普通分页，"ajax"为Ajax分页

	
	//页码显示
	private $showFirst = 1;		//页码默认显示首页，0为不显示
	private $showLast = 1;		//页码默认显示最后一页，0为不显示
	private $showPerOmit = 1;	//页码默认显示之前的省略号
	private $showFolOmit = 1;	//页码默认显示之后的省略号
	private $omitStyle = 0;		//省略号是否加链接，0为不加，1为加
	private $preOmitNum = 4;	//前面的省略号默认往前跳转4页
	private $floOmitNUm = 4;	//后面的省略号默认往后跳转4页
	private $prePage = 4;		//页码偏移量前4页
	private $floPage = 4;		//页码偏移量后4页
	private $skipStyle = 0;		//手动跳转，0为手动输入页码，1为下拉菜单选择页码

	//页码文字
	private $firstFonts = "首页";
	private $lastFonts = "末页";
	private $nextFonts = "下一页";
	private $preFonts = "上一页";
	private $omit = "…";

	//构造函数
	function __construct($totalNum,$perpageNum,$floPage){
	
		$this->totalNum = $totalNum;
		$this->perpageNum = $perpageNum;
		$this->floPage = $floPage;

		$this->getPageNow();

		$this->totalPage = ceil($this->totalNum / $this->perpageNum); //总页数
		$this->firstRow = $this->perpageNum * ($this->pageNow-1) + 1;//当前页第一条是总条数中第几条

		if($this->pageNow == 1){
		
			//第一页时页码向后偏移量
			for($i=0;$i<$this->floPage;$i++){
			
				$page = $this->pageNow+$i;
				echo "<a href=\"#&p=".$page."\">".$page."</a>";
			}
		}
	}

	//获得当前页页码
	public function getPageNow(){
	
		if(!isset($_GET['p'])){
			
			$this->pageNow = 1;
		}else if(is_int($_GET['p']) && $_GET['p']>0){
			
			$this->pageNow = $_GET['p'];	
		}else{
		
			die("page number error");
		}

		return $this->pageNow;
	}


}