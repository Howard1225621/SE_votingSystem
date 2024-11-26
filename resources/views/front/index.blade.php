@extends('front.common')

@section('body')
    <div class="filter-bar">
        <div class="filter-buttons">
            <button class="filter active">全部</button>
            <button class="filter">進行中</button>
            <button class="filter">尚未開始</button>
            <button class="filter">已結束</button>
        </div>
        <div class="filter-tools">
            <input
                type="text"
                class="search-input"
                placeholder="搜尋投票活動..."
            />
            <button class="search-button">搜尋</button>
        </div>
    </div>
    <div class="activity-container">
        <div class="activity-grid">
            <!-- 每個活動卡片 -->
            <div class="activity-card">
                <img
                    src="assets/a1.png"
                    alt="活動圖片"
                    class="activity-image"
                />
                <h3 class="activity-title">
                    活動名稱活動名稱活動名稱活動名稱（要限制26個字）
                </h3>
                <p class="activity-date">開始時間：2024/11/24</p>
                <div class="activity-info">
                    <p class="activity-participants">參與人數<br />72 人</p>
                    <p class="activity-days">剩餘天數<br />15 天</p>
                </div>
                <div class="vote-now">立即投票</div>
            </div>
            <div class="activity-card">
                <img
                    src="assets/a2.png"
                    alt="活動圖片"
                    class="activity-image"
                />
                <h3 class="activity-title">活動名稱 2</h3>
                <p class="activity-date">開始時間：2024/11/28</p>
                <div class="activity-info">
                    <p class="activity-participants">參與人數<br />50 人</p>
                    <p class="activity-days">剩餘天數<br />20 天</p>
                </div>
                <div class="vote-now">立即投票</div>
            </div>
            <div class="activity-card">
                <img
                    src="assets/a3.png"
                    alt="活動圖片"
                    class="activity-image"
                />
                <h3 class="activity-title">活動名稱 3</h3>
                <p class="activity-date">開始時間：2024/11/28</p>
                <div class="activity-info">
                    <p class="activity-participants">參與人數<br />50 人</p>
                    <p class="activity-days">剩餘天數<br />20 天</p>
                </div>
                <div class="vote-now">立即投票</div>
            </div>
            <div class="activity-card">
                <img
                    src="assets/a4.png"
                    alt="活動圖片"
                    class="activity-image"
                />
                <h3 class="activity-title">活動名稱 4</h3>
                <p class="activity-date">開始時間：2024/11/28</p>
                <div class="activity-info">
                    <p class="activity-participants">參與人數<br />50 人</p>
                    <p class="activity-days">剩餘天數<br />20 天</p>
                </div>
                <div class="vote-now">立即投票</div>
            </div>
            <div class="activity-card">
                <img
                    src="assets/a5.png"
                    alt="活動圖片"
                    class="activity-image"
                />
                <h3 class="activity-title">活動名稱 5</h3>
                <p class="activity-date">開始時間：2024/11/28</p>
                <div class="activity-info">
                    <p class="activity-participants">參與人數<br />50 人</p>
                    <p class="activity-days">剩餘天數<br />20 天</p>
                </div>
                <div class="vote-now">立即投票</div>
            </div>
            <div class="activity-card">
                <img
                    src="assets/a6.png"
                    alt="活動圖片"
                    class="activity-image"
                />
                <h3 class="activity-title">活動名稱 6</h3>
                <p class="activity-date">開始時間：2024/11/28</p>
                <div class="activity-info">
                    <p class="activity-participants">參與人數<br />50 人</p>
                    <p class="activity-days">剩餘天數<br />20 天</p>
                </div>
                <div class="vote-now">立即投票</div>
            </div>
            <div class="activity-card">
                <img
                    src="assets/a7.png"
                    alt="活動圖片"
                    class="activity-image"
                />
                <h3 class="activity-title">活動名稱 7</h3>
                <p class="activity-date">開始時間：2024/11/28</p>
                <div class="activity-info">
                    <p class="activity-participants">參與人數<br />50 人</p>
                    <p class="activity-days">剩餘天數<br />20 天</p>
                </div>
                <div class="vote-now">立即投票</div>
            </div>
            <div class="activity-card">
                <img
                    src="assets/a8.png"
                    alt="活動圖片"
                    class="activity-image"
                />
                <h3 class="activity-title">活動名稱 8</h3>
                <p class="activity-date">開始時間：2024/11/28</p>
                <div class="activity-info">
                    <p class="activity-participants">參與人數<br />50 人</p>
                    <p class="activity-days">剩餘天數<br />20 天</p>
                </div>
                <div class="vote-now">立即投票</div>
            </div>
            <div class="activity-card">
                <img
                    src="assets/a9.png"
                    alt="活動圖片"
                    class="activity-image"
                />
                <h3 class="activity-title">活動名稱 9</h3>
                <p class="activity-date">開始時間：2024/11/28</p>
                <div class="activity-info">
                    <p class="activity-participants">參與人數<br />50 人</p>
                    <p class="activity-days">剩餘天數<br />20 天</p>
                </div>
                <div class="vote-now">立即投票</div>
            </div>
            <!-- 可依需要複製更多活動卡片 -->
            <!-- 可依需要複製更多活動卡片 -->
        </div>
        <!-- 頁數選擇按鈕 -->
        <div class="pagination">
            <button class="page-button">1</button>
            <button class="page-button">2</button>
            <button class="page-button">3</button>
            <button class="page-button">最後頁</button>
            <button class="page-button">下一頁</button>
        </div>
    </div>
@endsection