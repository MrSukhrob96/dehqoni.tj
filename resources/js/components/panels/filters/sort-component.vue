<template>
    <div class="toolbox">
        <div class="toolbox-left">
            <!-- <div class="toolbox-info">
                Showing
                <span>9 of 56</span> Products
            </div> -->
        </div>
        <div class="toolbox-right">
            <div class="toolbox-sort">
                <label for="sortby">Sort by:</label>
                <div class="select-custom">
                    <select name="sortby" id="sortby" class="form-control">
                        <option value="popularity" selected="selected">Most Popular</option>
                        <option value="rating">Most Rated</option>
                        <option value="date">Date</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</template>
