<div class="navigation">
    <nav class="navigation__menu">
        <ul>
            <li class="navigation__menu--item">
                <a href="{{ route('index') }}" class="navigation__menu--item__link">Home</a>
            </li>
            <li class="navigation__menu--item has-child has-arrow">
                <a href="{{ route('primary-school') }}" class="navigation__menu--item__link">Primary School</a>
                <ul class="submenu sub__style">
                    <li><a href="#">Curriculum</a></li>
                    <li><a href="#">Fees</a></li>
                    <li><a href="#">Uniforms</a></li>
                    <li><a href="#">Circulars</a></li>
                    <li><a href="#">Results</a></li>
                    <li><a href="#">Activities</a></li>
                    <li><a href="#">Calendar</a></li>
                    <li><a href="#">Teachers</a></li>
                    <li><a href="#">Facilities</a></li>
                    <li><a href="#">Gallery</a></li>
                </ul>
            </li>
            <li class="navigation__menu--item has-child has-arrow">
                <a href="{{ route('senior-school') }}" class="navigation__menu--item__link">Secondary School</a>
                <ul class="submenu sub__style">
                    <li><a href="#">Holiday Tuitions</a></li>
                    <li><a href="#">Curriculum</a></li>
                    <li><a href="#">Fees</a></li>
                    <li><a href="#">Uniforms</a></li>
                    <li><a href="#">GCE Fees</a></li>
                    <li><a href="#">Results</a></li>
                    <li><a href="#">Circulars</a></li>
                    <li><a href="#">Activities</a></li>
                    <li><a href="#">Counselling & Guidance</a></li>
                    <li><a href="#">Calendar</a></li>
                    <li><a href="#">Teachers</a></li>
                    <li><a href="#">Facilities</a></li>
                    <li><a href="#">Gallery</a></li>
                </ul>
            </li>
            <li class="navigation__menu--item">
                <a href="{{ route('contact') }}" class="navigation__menu--item__link">Contact Us</a>
            </li>
            <li class="navigation__menu--item">
                <a href="{{ route('about-sc') }}" class="navigation__menu--item__link">About</a>
            </li>
        </ul>
    </nav>
</div>