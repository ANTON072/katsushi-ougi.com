import type { NextConfig } from 'next';

const nextConfig: NextConfig = {
  /* config options here */
  output: 'export', // 静的ビルド（Static Site Generation）のための設定
  // 画像の最適化を無効化（静的ビルドでは必要）
  images: {
    unoptimized: true,
  },
};

export default nextConfig;
