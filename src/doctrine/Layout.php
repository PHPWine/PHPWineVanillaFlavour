<?php 

 namespace PHPWineOptimizedHtml\Doctrine;

 ini_set("display_errors", 1);
 ini_set("display_startup_errors", 1);
 error_reporting(E_ALL);

 /**
 * @copyright (c) 2023 Optimized Html Cooked by nielsoffice
 *
 * MIT License
 *
 * Optimized Html free software: you can redistribute it and/or modify.
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 * @category   PHPLibrary Optimized HTML
 *
 *
 * @author    Leinner Zednanref <nielsoffice.wordpress.php@gmail.com>
 * @license   MIT License
 * @link      https://github.com/PHPWine/PHPWine/tree/main
 * @link      https://github.com/PHPWine/PHPWine/README.md
 * @link      https://phpwine.github.io/documents/
 * @version   v2.0
 * @since     10.26.2023
 * @since     11.05.2023
 *
 */

 Class Layout extends \PHPWineOptimizedHtml\OptimizedHtml {

    /**
     * @var String|Array keys Doctrine 
     * @property
     * Defined : Parent Doctrine container attributes html
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.11.2023 **/
    protected $attributes;

    /**
     * @var String|Array keys Doctrine 
     * @property
     * Defined : hooks Doctrine dynamic row for html
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.11.2023 **/
    protected $x_axis;

    /**
     * @var String|Array keys Doctrine 
     * @property
     * Defined : hooks Doctrine dynamic multiple row for html
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.11.2023 **/
    protected $mx_axis;

    /**
     * @var String|Array keys Doctrine 
     * @property
     * Defined : hooks Doctrine dynamic col for html
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.11.2023 **/
    protected $y_axis;

    /**
     * @var String|Array keys Doctrine 
     * @property
     * Defined : hooks Doctrine dynamic multiple cols for html
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.11.2023 **/
    protected $my_axis;

    /**
     * @var String|Array keys Doctrine 
     * @property
     * Defined : hooks top later element
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.11.2023 **/
    protected $top_later;

    /**
     * @var String|Array keys Doctrine 
     * @property
     * Defined : hooks bottom later element
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.11.2023 **/
    protected $bottom_later;

    /**
     * @var Array|Int media set for visibility 
     * @property
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.16.2023 **/
    public $screen;

    /**
     * @var Mixed doctrine child container 
     * @property
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.16.2023 **/
    public $screen_object;

    /**
     * @var Array|Bool media set for visibility 
     * @property
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.16.2023 **/
    public $visibility;

    /**
     * @var Array|Bool condition 
     * @property
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.16.2023 **/
    public $falsy;

    /**
     * @var Mixed object content
     * @property
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.16.2023 **/
    public $content_object;


    /**
     * @var Array config
     * @property
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.16.2023 **/
    public $client = [];
     
    public function __construct( array ...$wine_layout )
    { 

      parent::__construct();

    /**
     * --------------------------------------------------------------------------------------------
     * @method is defined check client end 
     * -------------------------------------------------------------------------------------------- 
     * Wine check if there's anonymouse keyword or invalid key the user use in doctrine
     * this will help to figureout which and where is mistake from client
     * 
     * @Defined : verifying key from client end attributes
     * @since: v1.0 doctrine
     * @since: v2.0 wine
     * DT: 11.10.2023 
     */
      $this->attributes = $this->is_defined([
        'DRKEY_ATTR'
      ], 
      ...$wine_layout
      );  

   /**
     * --------------------------------------------------------------------------------------------
     * @method is defined check client end 
     * -------------------------------------------------------------------------------------------- 
     * Wine check if there's anonymouse keyword or invalid key the user use in doctrine
     * this will help to figureout which and where is mistake from client
     * 
     * @Defined : verifying key from client end x_axis
     * @since: v1.0 doctrine
     * @since: v2.0 wine
     * DT: 11.10.2023 
     */
      $this->x_axis = $this->is_defined([
        'DRKEY_HOOKS','DRKEY_ROW',
        '','DRKEY_MAGIC'
      ], 
      ...$wine_layout
      );

   /**
     * --------------------------------------------------------------------------------------------
     * @method is defined check client end 
     * -------------------------------------------------------------------------------------------- 
     * Wine check if there's anonymouse keyword or invalid key the user use in doctrine
     * this will help to figureout which and where is mistake from client
     * 
     * @Defined : verifying key from client end multiple x axis
     * @since: v1.0 doctrine
     * @since: v2.0 wine
     * DT: 11.10.2023 
     */
      $this->mx_axis = $this->is_defined([
        'DRKEY_HOOKS','DRKEY_ROWS'
      ], 
      ...$wine_layout
      );


   /**
     * --------------------------------------------------------------------------------------------
     * @method is defined check client end 
     * -------------------------------------------------------------------------------------------- 
     * Wine check if there's anonymouse keyword or invalid key the user use in doctrine
     * this will help to figureout which and where is mistake from client
     * 
     * @Defined : verifying key from client end y axis
     * @since: v1.0 doctrine
     * @since: v2.0 wine
     * DT: 11.10.2023 
     */
      $this->y_axis = $this->is_defined([
        'DRKEY_HOOKS','DRKEY_COLUMN',
        '','DRKEY_MAGIC'
      ], 
      ...$wine_layout
      );

   /**
     * --------------------------------------------------------------------------------------------
     * @method is defined check client end 
     * -------------------------------------------------------------------------------------------- 
     * Wine check if there's anonymouse keyword or invalid key the user use in doctrine
     * this will help to figureout which and where is mistake from client
     * 
     * @Defined : verifying key from client end multiple y axis
     * @since: v1.0 doctrine
     * @since: v2.0 wine
     * DT: 11.10.2023 
     */
      $this->my_axis = $this->is_defined([
        'DRKEY_HOOKS','DRKEY_COLUMNS'
      ], 
      ...$wine_layout
      );
    

   /**
     * --------------------------------------------------------------------------------------------
     * @method is defined check client end 
     * -------------------------------------------------------------------------------------------- 
     * Wine check if there's anonymouse keyword or invalid key the user use in doctrine
     * this will help to figureout which and where is mistake from client
     * 
     * @Defined : verifying key from client end top later hook set in doctrine
     * @since: v1.0 doctrine
     * @since: v2.0 wine
     * DT: 11.10.2023 
     */
      $this->top_later = $this->is_defined([
        'DRKEY_TLATER'
      ],
      ...$wine_layout
      );

   /**
     * --------------------------------------------------------------------------------------------
     * @method is defined check client end 
     * -------------------------------------------------------------------------------------------- 
     * Wine check if there's anonymouse keyword or invalid key the user use in doctrine
     * this will help to figureout which and where is mistake from client
     * 
     * @Defined : verifying key from client end bottom top hook set in doctrine
     * @since: v1.0 doctrine
     * @since: v2.0 wine
     * DT: 11.10.2023 
     */
      $this->bottom_later = $this->is_defined([
        'DRKEY_BLATER'
      ], 
      ...$wine_layout
      );


   /**
     * --------------------------------------------------------------------------------------------
     * @method is defined check client end 
     * -------------------------------------------------------------------------------------------- 
     * Wine check if there's anonymouse keyword or invalid key the user use in doctrine
     * this will help to figureout which and where is mistake from client
     * 
     * @Defined : sanizited data input and create template
     * @since: v1.0 doctrine
     * @since: v2.0 wine
     * DT: 11.10.2023 
     */
      $this->wine_template(...$wine_layout);

    }

   /**
     * --------------------------------------------------------------------------------------------
     * @method is defined create template
     * -------------------------------------------------------------------------------------------- 
     * Wine check if there's anonymouse keyword or invalid key the user use in doctrine
     * this will help to figureout which and where is mistake from client
     * 
     * @Defined : ''
     * @since: v1.0 doctrine
     * @since: v2.0 wine
     * DT: 11.10.2023 
     */
    private function wine_template(...$wine_layout) {

   /**
     * --------------------------------------------------------------------------------------------
     * @method is defined create sanitized falsy value array
     * -------------------------------------------------------------------------------------------- 
     * 
     * @Defined : properties doctrine
     * @since: v1.0 doctrine
     * @since: v2.0 wine
     * DT: 11.10.2023 
     */
    
      $wine_mixing = [

        // obviously attribute property from client
        attributes   => isset($wine_layout[0][attributes]),

        // obviously rows  property from client
        xrow         => isset($wine_layout[0][hooks][xrow]),
        
        // obviously rows x12 property from client
        xrows        => isset($wine_layout[0][hooks][xrows]),
        
        // obviously col property from client
        column       => isset($wine_layout[0][hooks][column]),
        
        // obviously check columns property from client
        columns      => isset($wine_layout[0][hooks][columns]),
        
        // hook top and bottom later
        top_later    => isset($wine_layout[0][top_later]),
        bottom_later => isset($wine_layout[0][bottom_later]),
      
      ];


   /**
     * --------------------------------------------------------------------------------------------
     * @method is defined client
     * -------------------------------------------------------------------------------------------- 
     * Wine check if there's anonymouse keyword or invalid key the user use in doctrine
     * this will help to figureout which and where is mistake from client
     * 
     * @Defined : iterate and made raw into wine
     * @since: v1.0 doctrine
     * @since: v2.0 wine
     * DT: 11.10.2023 
     */
      $this->client = [

      'content' => [
        $wine_layout[0][attributes]?? [],

        $wine_layout[0][hooks]?? [],
        
        $wine_layout[0][hooks][xrow]?? [],
        
        $wine_layout[0][hooks][xrows]?? [],
        
        $wine_layout[0][hooks][column]?? [],
        
        $wine_layout[0][hooks][columns]?? [],
        
        $wine_layout[0][top_later]?? false,
        
        $wine_layout[0][bottom_later]?? false,
       ],

       'attr'      => $wine_mixing[attributes],
      
       'hook_top'  => $wine_mixing[top_later]?? false,
      
       'hook_bot'  => $wine_mixing[bottom_later]?? false,
      
       'condition' => $wine_mixing 

    ];

      return $this;

    }


   /**
     * --------------------------------------------------------------------------------------------
     * @method is defined create layout
     * -------------------------------------------------------------------------------------------- 
     * 
     * @Defined : get dynamic layout
     * @since: v1.0 doctrine
     * @since: v2.0 wine
     * DT: 11.10.2023 
     */
    public function visibility( 
            
      array $config = []
         
     ) {
      
    /**
     * --------------------------------------------------------------------------------------------
     * @properties 
     * @array 
     * -------------------------------------------------------------------------------------------- 
     * front end visivility properties
     * 
     * @Defined : make doctraine container visible to screen size
     * @since: v1.0 doctrine
     * @since: v2.0 wine
     * DT: 11.16.2023 
     */
       $this->visibility = [

          // obviously by default doctrain container visibily to mobie 
          $config['mobile']??    true
          // obviously by default doctrain container visibily to landscape mobile
         ,$config['ls_mobile']?? true
         // obviously by default doctrain container visibily to tablet
         ,$config['tablet']??    true
         // obviously by default doctrain container visibily to landscape teblet
         ,$config['ls_tablet']?? true 
         // obviously by default doctrain container visibily to laptop
         ,$config['laptop']??    true
         // obviously by default doctrain container visibily to desktop
         ,$config['desktop']??   true
         // obviously by default doctrain container visibily to large screen size
         ,$config['xl_screen']?? true
        
       ];

    /**
     * --------------------------------------------------------------------------------------------
     * @object 
     * @main doctrine content
     * -------------------------------------------------------------------------------------------- 
     * child doctrain container
     * 
     * @Defined : makes a columns colum row and rows structure
     * @since: v1.0 doctrine
     * @since: v2.0 wine
     * DT: 11.16.2023 
     */
     $this->content_object = $this->wine_hook_tag_selections(    
        // set by default for div
         div,[ 
          child => [
            please => function() {
              // we gonna loop through it
              $wine = [];
              foreach ($this->client['content'][1] as $wine_key => $wine_val) {
               foreach ($wine_val as $value) {

                 // assinged those hooks
                 $wine[] = $this->optimized_html(__,null, 
                  $this->wine_callable_hook(
                    $value[0], ...$value[1]?? []
                  )
                 ); 
                }
              }

            // return the elements  
            return $wine;

           }
          ]
         ],
         $this->client['content'][0] /* set prperties */
         ,array(
         ["top_"
        .$this->client['content'][6]?? false] /* set prperties */
        ,["bottom_"
        .$this->client['content'][7]?? false] /* set prperties */
        ),

      );
      
      return $this;

    }

    /**
     * --------------------------------------------------------------------------------------------
     * @object 
     * @main doctrine screen size 
     * -------------------------------------------------------------------------------------------- 
     * we have 320 and 540px also 540 to 768px and  768 to 992
     * we have 992 to 1024px we have also 1024 to 1280px
     * 1280 to 1920 last but not the least is 1920px above
     * 
     * @Defined : those screen size are available by default to make out doctrine content visibility
     * @since: v1.0 doctrine
     * @since: v2.0 wine
     * DT: 11.16.2023 
     */
    public function screen( array $media_query = []) { 

      $this->screen_object = wine(script,[

            child => [

             please => function() use ($media_query) {

              $this->screen = [
                
                // default is 320 for mobile
                $media_query['mobile']??    320
                // default is 320 for mobile landscape
               ,$media_query['ls_mobile']?? 540
               // default is 320 for tablet
               ,$media_query['tablet']??    768
               // default is 320 for tablet landscpae
               ,$media_query['ls_tablet']?? 992
               // default is 320 for laptop
               ,$media_query['laptop']??    1024
               // default is 320 for desktop
               ,$media_query['desktop']??   1280
               // default is 320 for largescreen
               ,$media_query['xl_screen']?? 1920
        
              ];

             $script = [];

             $script[] = "";
             // get doctrine child id container
             $doctrine_id = (string) $this->client['content'][0]['id'];

           /**
             * --------------------------------------------------------------------------------------------
             * @globalVariable 
             * @visibility GLOBAL VARAIBLE return size modified restricted to be intigers 
             * -------------------------------------------------------------------------------------------- */
             $GLOBALS['w_mobile']    = $mobile_id    = (int) $this->screen[0];
             $GLOBALS['w_ls_mobile'] = $xl_mobile_id = (int) $this->screen[1];
             $GLOBALS['w_tablet']    = $tablet_id    = (int) $this->screen[2];
             $GLOBALS['w_ls_tablet'] = $xl_tablet_id = (int) $this->screen[3];
             $GLOBALS['w_laptop']    = $laptop_id    = (int) $this->screen[4];
             $GLOBALS['w_desktop']   = $desktop_id   = (int) $this->screen[5];
             $GLOBALS['w_xl_screen'] = $xl_screen_id = (int) $this->screen[6];

           /**
             * --------------------------------------------------------------------------------------------
             * @globalVariable 
             * @visibility GLOBAL VARAIBLE visibility boolean 
             * -------------------------------------------------------------------------------------------- */
             $GLOBALS['w_v_mobile']    = $v_mobile_id    = (bool) $this->visibility[0];
             $GLOBALS['w_v_ls_mobile'] = $v_xl_mobile_id = (bool) $this->visibility[1];
             $GLOBALS['w_v_tablet']    = $v_tablet_id    = (bool) $this->visibility[2];
             $GLOBALS['w_v_ls_tablet'] = $v_xl_tablet_id = (bool) $this->visibility[3];
             $GLOBALS['w_v_laptop']    = $v_laptop_id    = (bool) $this->visibility[4];
             $GLOBALS['w_v_desktop']   = $v_desktop_id   = (bool) $this->visibility[5];
             $GLOBALS['w_v_xl_screen'] = $v_xl_screen_id = (bool) $this->visibility[6];
              
             // invoke visibility in front end
             if(
               !$v_mobile_id    || !$v_xl_mobile_id || !$v_tablet_id  ||
               !$v_xl_tablet_id || !$v_laptop_id    || !$v_desktop_id ||
               !$v_xl_screen_id  
               ) { 
                
                $script[] = " var __t = document.getElementById('$doctrine_id'); ";
                $script[] = " const docID=document.body.id='app_id',childElem=document.getElementById('app_id'),appData=document.querySelectorAll('.wine-app');appData.forEach((e,d)=>{childElem.insertAdjacentElement('beforeend',e)}); ";
            
               }
            
              /**
               * --------------------------------------------------------------------------------------------
               * @visibility mobile 
               * @main media size screen 320 
               * -------------------------------------------------------------------------------------------- 
               * This will run when you set false which means to hide in mobile screen
               * 
               * @Defined : mobile screen
               * @since: v1.0 doctrine
               * @since: v2.0 wine
               * DT: 11.16.2023 
               */
               if(!$v_mobile_id) {
                 $script[] = " var wine_mobile = window.matchMedia('(min-width:".$mobile_id."px) and (max-width:".$xl_mobile_id."px)'); ";
                 $script[] = " function e(e){if(e.matches){__t.style.display='none'}else{__t.style.display=''}}wine_mobile.addListener(e);e(wine_mobile);";
               }
            
              /**
               * --------------------------------------------------------------------------------------------
               * @visibility mobile large 
               * @main media size screen 540 
               * -------------------------------------------------------------------------------------------- 
               * This will run when you set false which means to hide in mobile screen
               * 
               * @Defined : mobile screen
               * @since: v1.0 doctrine
               * @since: v2.0 wine
               * DT: 11.16.2023 
               */
               if(!$v_xl_mobile_id) {
                 $script[] = " var wine_lgmobile = window.matchMedia('(min-width:".$xl_mobile_id."px) and (max-width:".$tablet_id."px)'); ";
                 $script[] = " function e(e){if(e.matches){__t.style.display='none'}else{__t.style.display=''}}wine_lgmobile.addListener(e);e(wine_lgmobile);";
               }

              /**
               * --------------------------------------------------------------------------------------------
               * @visibility tablet 
               * @main media size screen 768 
               * -------------------------------------------------------------------------------------------- 
               * This will run when you set false which means to hide in tablet screen
               * 
               * @Defined : tablet screen
               * @since: v1.0 doctrine
               * @since: v2.0 wine
               * DT: 11.16.2023 
               */
               if(!$v_tablet_id) {
                $script[] = " var wine_tablet   = window.matchMedia('(min-width:".$tablet_id."px) and (max-width:".$xl_tablet_id ."px)'); ";
                $script[] = " function e(e){if(e.matches){__t.style.display='none'}else{__t.style.display=''}}wine_tablet.addListener(e);e(wine_tablet);";
               }

              /**
               * --------------------------------------------------------------------------------------------
               * @visibility tablet large 
               * @main media size screen 992 
               * -------------------------------------------------------------------------------------------- 
               * This will run when you set false which means to hide in tablet screen
               * 
               * @Defined : mobile screen
               * @since: v1.0 doctrine
               * @since: v2.0 wine
               * DT: 11.16.2023 
               */
               if(!$v_xl_tablet_id) {
                $script[] = " var wine_lgtablet = window.matchMedia('(min-width:".$xl_tablet_id ."px) and (max-width:".$laptop_id."px)'); ";
                $script[] = " function e(e){if(e.matches){__t.style.display='none'}else{__t.style.display=''}}wine_lgtablet.addListener(e);e(wine_lgtablet);";
              }

              /**
               * --------------------------------------------------------------------------------------------
               * @visibility laptop large 
               * @main media size screen 1024 
               * -------------------------------------------------------------------------------------------- 
               * This will run when you set false which means to hide in laptop screen
               * 
               * @Defined : laptop screen
               * @since: v1.0 doctrine
               * @since: v2.0 wine
               * DT: 11.16.2023 
               */
              if(!$v_laptop_id) {
                $script[] = " var wine_laptop   = window.matchMedia('(min-width:".$laptop_id."px) and (max-width:".$desktop_id."px)'); ";
                $script[] = " function n(n){if(n.matches){__t.style.display='none'}else{__t.style.display=''}}wine_laptop.addListener(n);n(wine_laptop);";
              }

              /**
               * --------------------------------------------------------------------------------------------
               * @visibility desktop large 
               * @main media size screen 1280 
               * -------------------------------------------------------------------------------------------- 
               * This will run when you set false which means to hide in desktop screen
               * 
               * @Defined : desktop screen
               * @since: v1.0 doctrine
               * @since: v2.0 wine
               * DT: 11.16.2023 
               */
              if(!$v_desktop_id) {
                $script[] = " var wine_desktop  = window.matchMedia('(min-width:".$desktop_id."px) and (max-width:". $xl_screen_id."px)'); ";
                $script[] = " function e(e){if(e.matches){__t.style.display='none'}else{__t.style.display=''}}wine_desktop.addListener(e);e(wine_desktop);";
              }

              /**
               * --------------------------------------------------------------------------------------------
               * @visibility large screen  
               * @main media size screen 1920 >  
               * -------------------------------------------------------------------------------------------- 
               * This will run when you set false which means to hide in large screen screen
               * 
               * @Defined : large screen
               * @since: v1.0 doctrine
               * @since: v2.0 wine
               * DT: 11.16.2023 
               */
              if(!$v_xl_screen_id) {
                $script[] = " var wine_xl_screen = window.matchMedia('(min-width:".$xl_screen_id."px)'); ";
                $script[] = " function e(e){if(e.matches){__t.style.display='none'}else{__t.style.display=''}}wine_xl_screen.addListener(e);e(wine_xl_screen);";
              }

             return $script;
             
          }
        ]
      ],[classes=>'wine-app']);

      return $this;    
   
    }

     public function layout() {

       return $this->content_object . $this->screen_object;

     } 

    /**
     * @method is_defined client key ?  
     * Defined : check attribute doctrine 
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.12.2023 **/    
    private function is_defined( array $keys = [], array ...$wine_layout ) {

      $wine_registered_valid_keys = wine_valid_keys();

      if(operations($keys, 1, EQLESS)) {

        $is_valid = $keys[0]; 

        $get_valid_key = $this->wine_hooks_filter_assigned(
            $is_valid, 
            $wine_registered_valid_keys
        );

        $get_valid_key = array_values(
            $wine_registered_valid_keys
        )[$get_valid_key];

        if( $get_valid_key == true || !empty($get_valid_key)) {
          return $get_valid_key;
        }

      }  else if(operations($keys, 2, SUPER)) {

        $is_valid = $keys[1];
    
        $get_valid_key = $this->wine_hooks_filter_assigned($is_valid, $wine_registered_valid_keys);
        $get_valid_key = array_values($wine_registered_valid_keys)[$get_valid_key];

        if( $get_valid_key == true || !empty($get_valid_key)) {
          return $get_valid_key;
        }

      } else if(operations($keys, 4, SUPER)) { 

        $is_valid = $keys[1]; 

        $get_valid_key = $this->wine_hooks_filter_assigned(
            $is_valid, 
            $wine_registered_valid_keys
        );
        
        $get_valid_key = array_values(
            $wine_registered_valid_keys
         )[$get_valid_key];
       
        if( $get_valid_key == true || !empty($get_valid_key)) {
          return $get_valid_key;
        }

      }
    }

    /**
     * @method assigned hook to the dynamic element  
     * Defined : check attribute doctrine 
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.12.2023 **/    
    private function wine_hooks_filter_assigned( $is_valid , array $valid_keys = [] ) {

      if($this->is_valid_key( $is_valid , $valid_keys)) {
      
        $get_valid_key = array_search($is_valid,
          array_keys($valid_keys)
        );

       } else {

        throw new \Exception("\invalid key from doctrine : 
            $is_valid [phpwine.github.io/documents/]"
        );
        exit;

       }  
      
      if( 
        !is_null($get_valid_key) || 
        !empty($get_valid_key)   || 
        $get_valid_key !== false 
      ) { 

       return $get_valid_key;
      }
      
    }

    /**
     * @method is_valid_key 
     * Defined : validate if valid key from wine.
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.12.2023 **/    
    protected function is_valid_key( string|array $wine_key, array $valid_keys = []) {

      $valid_keys = (count($valid_keys) == 0 ) ? array_values(wine_valid_keys()) : array_keys($valid_keys);

      if(in_array($wine_key,$valid_keys)) { 
        return true;
      }   

    }
    

 }