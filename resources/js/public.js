'use strict';
/**
 * create a new js class by this project name.
 * @return {[type]} [description]
 * @Authoe bluelife
 * @Email thebulelife@outlook.com
 * @Data 2017-01-02
 */
function Adease($) {
    this.domain = 'https://www.adlinkx.com';
    this.winW = document.documentElement.clientWidth || document.body.clientWidth;
    this.winH = document.documentElement.clientHeight || document.body.clientHeight;
    this.description = '此JS类是根据当前项目需要扩展的一些快捷使用的方法。有些方法可能常用的JS类库中已有，有些可能原生的JS中已支持，为了兼容低版本浏览器做了一些修改[覆盖]，主要还是看那些库中文档有点麻烦就自己根据项目需求写了一些方法';
    this.className = 'Adease';
    this.author = 'bluelife';
    this.version = '0.0.1';
    this.date = '2017-01-02';
    this.email = 'thebulelife@outlook.com';
    this.jQuery = $;
}

/**
 * 显示信息
 * @return {[type]} [description]
 */
Adease.prototype.information = function() {
    if (arguments.length > 0) {
        for (var i = 0; i < arguments.length; i++) {
            console.log(this.ucfirst(arguments[i]) + ':' + this[arguments[i]]);
        }
    } else {
        console.log('ClassName:' + this.className);
        console.log('Description:' + this.description);
        console.log('Author:' + this.author);
        console.log('Version:' + this.version);
        console.log('Date:' + this.date);
        console.log('Email:' + this.email);
    }
}

/**
 * alert Functions
 * @return {[type]} [description]
 * @Authoe bluelife
 * @Email thebulelife@outlook.com
 * @Data 2017-01-02
 * @uses  ADEASE.alert('正在注册......'[,s[,callback]]);
 */
Adease.prototype.alert = function() {
    var _this = this;
    var text = 'alert message',
        timer = 2000,
        callback = null;
    switch (arguments.length) {
        case 2:
            text = arguments[0];
            timer = parseInt(arguments[1] * 1000);
            break;
        case 3:
            text = arguments[0];
            timer = parseInt(arguments[1] * 1000);
            callback = arguments[2];
            break;
        default:
            text = arguments[0];
            break;
    }
    this.createElement('div', {
        'className': 'alert-mask-layer',
        'width': this.winW + 'px',
        'height': this.winH + 'px',
        'position': 'fixed',
        'left': 0,
        'top': 0,
        'color': '',
        'borderRadius': '5px',
        'background': '#494949',
        'opacity': 0.6,
        'zIndex': 10000
    });
    this.createElement('div', {
        'className': 'alert-popup-layer',
        'width': 300 + 'px',
        'height': 160 + 'px',
        'position': 'fixed',
        'left': parseInt((this.winW - 300) / 2) + 'px',
        'top': parseInt((this.winH - 160) / 2) + 'px',
        'color': '#494949',
        'borderRadius': '5px',
        'background': '#FFF',
        'boxShadow': '2px 2px 4px #494949',
        'fontWeight': 'bold',
        'line-height': 160 + 'px',
        'text-align': 'center',
        'opacity': 1,
        'zIndex': 10001,
        'innerHTML': text
    }, function() {
        callback ? (
            _this.setTimeOut(function() {
                callback();
                var maskLayer = document.getElementsByClassName('alert-mask-layer')[0];
                var popupLayer = document.getElementsByClassName('alert-popup-layer')[0];
                _this.removeChild(popupLayer);
                _this.removeChild(maskLayer);
            }, timer)
        ) : (
            _this.setTimeOut(function() {
                var maskLayer = document.getElementsByClassName('alert-mask-layer')[0];
                var popupLayer = document.getElementsByClassName('alert-popup-layer')[0];
                _this.removeChild(popupLayer);
                _this.removeChild(maskLayer);
            }, timer)
        );
    });



    // if (callback) {
    //     callback();
    // } else {
    //     this.setTimeOut(function(){
    //      var maskLayer = document.getElementsByClassName('mask-layer')[0];
    //      var popupLayer = document.getElementsByClassName('popup-layer')[0];
    //      document.body.removeChild(popupLayer);
    //      document.body.removeChild(maskLayer);
    //      // console.log(maskLayer);
    //      // console.log(popupLayer);
    //     },timer);
    // }
}


/**
 * createElement Functions 创建元素
 * @return {[type]} [description]
 * @Authoe bluelife
 * @Email thebulelife@outlook.com
 * @Data 2017-01-02
 */
Adease.prototype.createElement = function(els, opations, fn) {
    var i = '';
    var createElement = document.createElement(els);
    for (i in opations) {
        i == 'className' || i == 'id' || i == 'innerHTML' ? (
            createElement[i] = opations[i]
        ) : (
            i == 'opacity' ? (
                createElement.style['opacity'] = opations[i],
                createElement.style['filter'] = 'alpha(opacity:' + (opations[i] * 100) + ')'
            ) : (
                createElement.style[this.ucwords([i], 2)] = opations[i]
            )
        );
    }
    this.appendChild(createElement) ? (fn ? fn() : null) : null;
    return this;
}

/**
 * appendChild Functions 向页面中添加元素
 * @return {[type]} [description]
 * @Authoe bluelife
 * @Email thebulelife@outlook.com
 * @Data 2017-01-02
 */
Adease.prototype.appendChild = function(els) {
    return document.body.appendChild(els) ? true : false;
}

/**
 * removeChild Functions 删除页面中的元素
 * @return {[type]} [description]
 * @Authoe bluelife
 * @Email thebulelife@outlook.com
 * @Data 2017-01-02
 */
Adease.prototype.removeChild = function(els) {
    return document.body.removeChild(els) ? true : false;
}


/**
 * setTimeOut Functions 设置延时方法
 * @param {Function} fn [description]
 * @param {[type]}   s  [description]
 */
Adease.prototype.setTimeOut = function(fn, s) {
    setTimeout(fn, s);
}

/**
 * [confirm 控件]
 * @param  {[type]} title [description]
 * @param  {[type]} json  [description]
 * @return {[type]}       [description]
 * @uses  
 *  ADEASE.confirm('您确定要删除创意吗？', {
        'confirm': {
            'title': '确定',
            'callback': function() { alert('确定'); }
        },
        'cancel': {
            'title': '取消',
            'callback': function() { alert('取消'); }
        }
    });
 */
Adease.prototype.confirm = function(title, json) {
    var _this = this,
        text = title ? title : 'confirm widget !',
        confirm_buts_title = json.confirm.title ? json.confirm.title : 'confirm',
        confirm_buts_callback = json.confirm.callback ? json.confirm.callback : null,
        cancel_buts_title = json.cancel.title ? json.cancel.title : 'cancel',
        cancel_buts_callback = json.cancel.callback ? json.cancel.callback : null;
    this.createElement('div', {
        'className': 'confirm-mask-layer',
        'width': this.winW + 'px',
        'height': this.winH + 'px',
        'position': 'fixed',
        'left': 0,
        'top': 0,
        'color': '',
        'borderRadius': '5px',
        'background': '#494949',
        'opacity': 0.6,
        'zIndex': 10000
    });
    this.createElement('div', {
        'className': 'confirm-popup-layer',
        'width': 300 + 'px',
        'height': 160 + 'px',
        'position': 'fixed',
        'left': parseInt((this.winW - 300) / 2) + 'px',
        'top': parseInt((this.winH - 160) / 2) + 'px',
        'color': '#494949',
        'borderRadius': '5px',
        'background': '#FFF',
        'overflow': 'hidden',
        'zIndex': 10000,
        'border': '1px solid #494949',
        'innerHTML': '<div class="confirm-title-block">' + text + '</div><div class="confirm-buttons-group-block"><a href="javascript:void(0);" class="JW-confirm-button" data-type="confirm">' + confirm_buts_title + '</a><a href="javascript:void(0);" class="JW-confirm-button" data-type="cancel">' + cancel_buts_title + '</a></div><style>.confirm-title-block{width:100%;height:110px;text-align:center;line-height:110px;word-wrap:break-word;}\n.confirm-buttons-group-block{width:100%;height:49px;border-top:1px solid #17a08c;}\n.JW-confirm-button{display:block;float:left;width:50%;heihgt:49px;line-height:49px;text-align:center;color:#FFF;font-size:14px;background:#1CAF9A;}\n.JW-confirm-button:hover{background:#17a08c;}</style>'
    });

    var JWconfirmBut = document.getElementsByClassName('JW-confirm-button');
    for (var i = 0; i < JWconfirmBut.length; i++) {
        this.addEvent(JWconfirmBut[i], 'click', function() {
            var confirmMaskLayer = document.getElementsByClassName('confirm-mask-layer')[0];
            var confirmPopupLayer = document.getElementsByClassName('confirm-popup-layer')[0];
            _this.removeChild(confirmMaskLayer);
            _this.removeChild(confirmPopupLayer);
            if (_this.attr(this, 'data-type') == 'confirm') { //确定
                confirm_buts_callback ? confirm_buts_callback() : null;
            } else {
                cancel_buts_callback ? cancel_buts_callback() : null;
            }
        });
    }
}

/**
 * ucwords Functions 将字符串首字母转换成大写[将css格式属性名[border-color]转成js设置属性格式的形式[borderColor]],如果不指定第二个参数，则将全部转换
 * @param  {[type]} str [description]
 * @param  {[type]} num [description]
 * @return {[type]}     [description]
 */
Adease.prototype.ucwords = function() {
    var argus = arguments,
        tmp = [],
        ucwords = '';
    switch (argus.length) {
        case 2:
            if (/[(\-)|(\s)]+/.test(argus[0])) {
                var arr = argus[0].toString().split('-');
                for (var i = 0; i < arr.length; i++) {
                    ucwords += argus[1] ? (
                        i == parseInt(argus[1] - 1) ? (arr[parseInt(argus[1] - 1)].charAt(0).toUpperCase() + arr[parseInt(argus[1] - 1)].substr(1, parseInt(arr[parseInt(argus[1] - 1)].length - 1))) : arr[i]
                    ) : (arr[i].charAt(0).toUpperCase() + arr[i].substr(1, parseInt(arr[i].length - 1)));
                }
                tmp.push(ucwords);
            } else {
                tmp = argus[0];
            }
            break;
        default:
            if (/[(\-)|(\s)]+/.test(argus[0])) {
                var arr = argus[0].toString().split('-');
                for (var i = 0; i < arr.length; i++) {
                    arr[i].charAt(0).toUpperCase() + arr[i].substr(1, parseInt(arr[i].length - 1))
                }
                tmp.push(ucwords);
            } else {
                tmp = argus[0];
            }
            break;
    }
    return tmp;
}

/**
 * [ucfirst 一个单词首字母大写]
 * @param  {[type]} str [description]
 * @return {[type]}     [description]
 */
Adease.prototype.ucfirst = function(str) {
    return str ? str.charAt(0).toUpperCase() + str.substr(1, parseInt(str.length - 1)) : '';
}


Adease.prototype.addEvent = function(els, ev, fn) {
    els.attachEvent ? (els.attachEvent('on' + ev, function() {
        fn.call(els);
        window.event.cancelBubble = true; //IE,阻止冒泡 
        window.event.returnValue = false //IE,取消默认事件
        return false;
    })) : (els.addEventListener(ev, function(e) {
        fn.call(els);
        e.stopPropagation(); //标准,阻止冒泡
        e.preventDefault(); //标准,取消默认事件
        return false;
    }, false));
}


Adease.prototype.forEach = function(arr, fn) {
    alert(arr.length);
    if (Array.forEach == void 0 || !Array.forEach || Array.forEach == null) {
        Array.prototype.forEach = function(callback) {
            for (var i = 0; i < this.length; i++) {
                callback.call(window, this[i]);
            }
        }
    }

    arr.forEach(fn);
}

Adease.prototype.json = function(json, fn) {
    var i = '';
    for (i in json) {
        fn.call(this, i, json[i]);
    }
}

Adease.prototype.attr = function() {
    if (arguments.length == 2) {
        if (typeof arguments[1] == 'string') {
            return arguments[0].getAttribute(arguments[1]);
        } else {
            this.json(arguments[1], function(key, value) {
                arguments[0].setAttribute(key, value);
            });
        }
    } else {
        arguments[0].setAttribute(arguments[1], arguments[2]);
    }
}


Adease.prototype.ckeckLogin = function() {
    var _this = this;
    var crrentPage = window.location.href.toString().split('\/').pop();
    if (crrentPage == 'login' || crrentPage == 'register') {
        return false;
    } else {
        this.jQuery.ajax({
            url: encodeURI(this.domain + '/user/ckeckLogin'),
            type: 'GET',
            async: true,
            success: function(res) {
                // console.log(res);
                res = typeof res === 'string' ? (JSON.parse ? JSON.parse(res) : this.jQuery.parseJSON('res')) : res;
                if (res.code == 1 && res.msg == false) {
                    _this.alert('您尚末登录，请登录。', 1.8, function() {
                        window.location.href = _this.domain + '/user/login';
                    });
                    return false;
                }
            },
            error: function(err) {
                console.log(err);
            }
        });
    }


}


window.ADEASE = new Adease(jQuery);
ADEASE.information('className', 'description', 'author', 'version', 'date', 'email');
ADEASE.ckeckLogin();
