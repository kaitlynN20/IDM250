<?php

/* checks if there is a sidebar*/
if (!is_active_sidebar('sidebar')) {
    return;
}

/*calls in the sidebar*/
dynamic_sidebar('sidebar');