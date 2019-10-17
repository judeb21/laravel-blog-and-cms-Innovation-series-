document.getElementsByTagName('body')[0].addEventListener('mousemove', function(n) {     
        t.style.left = n.clientX + 'px',
        t.style.top = n.clientY + 'px',
        e.style.left = n.clientX + 'px',
        e.style.top = n.clientY + 'px'
    });

    var t = document.getElementById('cursor1'),
        e = document.getElementById('cursor2'),
        i = document.getElementById('cursor3');

    function n(t) {
        e.classList.add('hover'), i.classList.add('hover')
    }

    function s(t) {
        e.classList.remove('hover'), i.classList.remove('hover')
    }

    s();

    for (var i = document.querySelectorAll('.hover-target'), a = i.length - 1; a >= 0; a--) {
        o(i[a]) 
    }

    function o(t) {
        t.addEventListener('mousemove', n), t.addEventListener('mouseout', s)
    }
